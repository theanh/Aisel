'use strict';

/**
 * @ngdoc overview
 * @name Aisel
 *
 * @description
 * ...
 */
define(['app'], function (app) {
    app.controller('HomepageCtrl', ['$location', '$scope', '$routeParams', '$rootScope', 'rootService',
        function ($location, $scope, $routeParams, $rootScope, rootService) {
            $scope.content = false;
            rootService.getApplicationConfig().success(
                function (data, status) {
                    $scope.content = JSON.parse(data.config_homepage).content;
                }
            );
        }]);
});