var Service = angular.module('services');

Service.factory('Comment', function($http) {

  return {
    get : function() {
      return $http.get('api/comments');
    },

    show : function(id) {
      return $http.get('api/comments/' + id);
    },

    save : function(commentData) {
      return $http({
        method: 'POST',
        url: 'api/comments',
        type: 'JSON',
        dataType: 'JSON',
        data: JSON.stringify(commentData)
      });
    },

    destroy : function(id) {
      return $http.delete('api/comments/' + id);
    }
  };

});