# Controllers

xzbAppControllers = angular.module 'xzbApp.controllers', ['xzbApp.services']

xzbAppControllers.controller 'ArticleListCntl', ['$scope', 'articleService', (scope, _articleService) ->
	scope.articles = _articleService.query()
]

xzbAppControllers.controller 'ArticleDetailCntl', ['$scope', '$routeParams', 'articleService', (scope, routeParams, _articleService) ->
	scope.article = _articleService.get id: routeParams.id, (article) ->
]