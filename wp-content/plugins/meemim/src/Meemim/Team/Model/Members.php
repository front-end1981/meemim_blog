<?php


/**
 * Class Meemim_Team_Model_Members
 */
class Meemim_Team_Model_Members extends Meemim_Core_BaseModel
{
    /**
     * Gets all members.
     *
     * @param int $parentId Parent Id
     *
     * @return stdClass
     *
     * @throws RuntimeException If query failed
     */
    public function getAll($parentId = 0)
    {
        $query = $this->getQueryBuilder()
            ->select('*')
            ->from($this->getTableName())
            ->where('parent_id', '=', (int)$parentId);

        $members = $this->db->get_results($query->build());

        if ($this->db->last_error) {
            throw new RuntimeException($this->db->last_error);
        }

        foreach ($members as $index => $member) {
            $member->photo = wp_prepare_attachment_for_js(
                $member->attachment_id
            );
        }

        return $members;
    }

    public function getById($id)
    {
        $query = $this->getQueryBuilder()
            ->select('*')
            ->from($this->getTableName())
            ->where('id', '=', (int)$id);

        $member = $this->db->get_row($query->build());

        if ($this->db->last_error) {
            throw new RuntimeException($this->db->last_error);
        }

        $member->photo = wp_prepare_attachment_for_js($member->attachment_id);

        return $member;
    }

    /**
     * Stores member to the database.
     *
     * @param int   $parentId   Parent Id
     * @param array $attachment Attachment data
     *
     * @return int Member Id
     *
     * @throws RuntimeException If query failed
     */
    public function add($parentId, array $attachment)
    {
        $query = $this->getQueryBuilder()
            ->insertInto($this->getTableName())
            ->fields(array('parent_id', 'attachment_id'))
            ->values(array((int)$parentId, $attachment['id']));

        $this->db->query($query->build());

        if ($this->db->last_error) {
            throw new RuntimeException($this->db->last_error);
        }

        return $this->db->insert_id;
    }

    public function update(array $data)
    {
        if (!array_key_exists('id', $data)) {
            throw new InvalidArgumentException(
                'Can\'t update member without ID.'
            );
        }

        $id = $data['id'];

        unset($data['id'], $data['photo']);

        $query = $this->getQueryBuilder()
            ->update($this->getTableName())
            ->fields(array_keys($data))
            ->values(array_values($data))
            ->where('id', '=', (int)$id);


        $this->db->query($query->build());

        if ($this->db->last_error) {
            throw new RuntimeException($this->db->last_error);
        }
    }

    public function remove($id)
    {
        $query = $this->getQueryBuilder()
            ->deleteFrom($this->getTableName())
            ->where('id', '=', (int)$id);

        $this->db->query($query->build());

        if ($this->db->last_error) {
            throw new RuntimeException($this->db->last_error);
        }
    }
}