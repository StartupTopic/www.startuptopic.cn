# Directives

xzbAppDirectives = angular.module 'xzbApp.directives', []

xzbAppDirectives.directive 'appVersion', ['version', (version) ->
	(scope, elm, attrs) ->
		elm.text version
]