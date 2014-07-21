'use strict'

# Declare app level module which depends on controllers, directives, filters, and services

xzbApp = angular.module 'xzbApp', ['xzbApp.controllers', 'xzbApp.directives', 'xzbApp.filters', 'xzbApp.services']

xzbApp.config ['$routeProvider', ($routeProvider) ->
	$routeProvider.when '/', 
		templateUrl: 'partials/article-list.html'
		controller: 'ArticleListCntl'
	$routeProvider.when '/detail/:id', 
		templateUrl: 'partials/article-detail.html'
		controller: 'ArticleDetailCntl'
	$routeProvider.otherwise redirectTo: '/'
]