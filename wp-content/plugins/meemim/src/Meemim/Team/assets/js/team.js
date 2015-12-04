(function ($, ko, undefined) {

  $(document).ready(function () {
    var ajaxUrl = window.ajaxurl;

    function TeamViewModel() {
      var self = this;

      self.isLoading = ko.observable(true);

      self.members = ko.observableArray([]);
      self.current = ko.observable();

      self.dataService = new MembersDataService();
      self.editor = new EditorController(self);
      self.uploader = new UploaderController(self);

      self.remove = function (member) {
        if (!confirm('Are you sure?')) {
          return;
        }

        self.isLoading(true);

        self.dataService.removeMember(member.id).done(function () {
          if (parseInt(member.parent_id) !== 0) {
            self.editor.members.remove(member);

            return;
          }

          self.members.remove(member);
        }).fail(function (jqXHR) {
          alert('Failed to remove member: ' + jqXHR.responseJSON.message);
        }).always(function () {
          self.isLoading(false);
        });
      };

      self.edit = function (member) {
        self.editor.open(member);
      };

      self.init = function () {
        self.isLoading(true);

        self.dataService.loadMembers(0).done(function (response) {
          if (!response.members.length) {
            return;
          }

          response.members.forEach(function (member) {
            self.members().push(member);
            self.members.valueHasMutated();
          })
        }).fail(function (jqXHR) {
          alert('Failed to load members: ' + jqXHR.responseJSON.message);
        }).always(function () {
          self.isLoading(false);
        })
      };

      self.init();
    }

    function MembersDataService() {
      var self = this;

      var resolve = function (deferred) {
        return function (response, textStatus, jqXHR) {
          if (!response.success) {
            deferred.reject(jqXHR);

            return;
          }

          deferred.resolve(response);
        }
      };

      var reject = function (deferred) {
        return function (jqXHR) {
          deferred.reject(jqXHR);
        }
      };

      self.loadMembers = function (id) {
        var deferred = $.Deferred();

        $.post(ajaxUrl, {
          action: 'meemim',
          route:  {module: 'team', action: 'getMembers'},
          id:     id || 0
        }).done(resolve(deferred)).fail(reject(deferred));

        return deferred.promise();
      };

      self.addMember = function (parentId, attachment) {
        var deferred = $.Deferred();

        $.post(ajaxUrl, {
          action: 'meemim',
          route: {
            module: 'team',
            action: 'addMember'
          },
          attachment: attachment,
          parentId: parseInt(parentId) || 0
        }).done(resolve(deferred)).fail(reject(deferred));

        return deferred.promise();
      };

      self.updateMember = function (member) {
        var deferred = $.Deferred();

        $.post(ajaxUrl, {
          action: 'meemim',
          route: {
            module: 'team',
            action: 'updateMember'
          },
          member: ko.isObservable(member) ? member() : member
        }).done(resolve(deferred)).fail(reject(deferred));

        return deferred.promise();
      };

      self.removeMember = function (id) {
        var deferred = $.Deferred();

        $.post(ajaxUrl, {
          action: 'meemim',
          route: {
            module: 'team',
            action: 'removeMember'
          },
          id: parseInt(id)
        }).done(resolve(deferred)).fail(reject(deferred));

        return deferred.promise();
      };
    }

    function EditorController(vm) {
      var self = this;

      self.isVisible = ko.observable(false);
      self.isLoading = ko.observable(false);

      self.members = ko.observableArray([]);
      self.member = ko.observable({
        id: null,
        first_name: '',
        last_name: '',
        description: '',
        parent_id: null,
        attachment_id: null,
        photo: {
          sizes: {
            thumbnail: {
              url: '//placehold.it/150x150'
            }
          }
        }
      });

      self.open = function (member) {
        self.member(member);

        self.isLoading(true);

        vm.dataService.loadMembers(member.id).done(function (response) {
          self.members(response.members);
          self.isVisible(true);
        }).fail(function (jqXHR) {
          alert('Failed to load member: ' + jqXHR.responseJSON.message);
        }).always(function () {
          self.isLoading(false);
        })
      };

      self.close = function () {
        var deferred = $.Deferred();

        self.isLoading(true);

        vm.dataService.updateMember(self.member).done(function () {
          self.isVisible(false);

          var parentId = parseInt(self.member().parent_id);

          if (parentId !== 0) {
            vm.members().forEach(function (member) {
              if (parseInt(member.id) === parentId) {
                self.open(member);
              }
            });
          }

          deferred.resolve();
        }).fail(function (jqXHR) {
          alert('Failed to update member: ' + jqXHR.responseJSON.message);
          deferred.reject();
        }).always(function () {
          self.isLoading(false);
        });

        return deferred.promise();
      };

      self.reOpen = function (member) {
        self.close().done(function () {
          self.open(member);
        });
      };
    }

    function UploaderController(vm) {
      var self  = this,
          id = 0,
          frame = window.wp.media({
            multiple: false
          });

      frame.on('select', function () {
        self.select(frame.state().get('selection').first().toJSON());
      });

      self.open = function (memberId) {
        id = parseInt(memberId);
        frame.open();
      };

      self.select = function (attachment) {
        vm.dataService.addMember(id, attachment).done(function (response) {
          if (id > 0) {
            vm.editor.members.push(response.member);

            return;
          }

          vm.members.push(response.member);
        }).fail(function (jqXHR) {
          alert('Failed to add member: ' + jqXHR.responseJSON.message);
        });
      };
    }

    ko.applyBindings(new TeamViewModel(), document.getElementById('meemim_team'));
  });

}(window.jQuery, window.ko));