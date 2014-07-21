# Filters

xzbAppFilters = angular.module 'xzbApp.filters', []

xzbAppFilters.filter 'interpolate', ['version', (version) ->
	(text) ->
		String(text).replace /\%VERSION\%/mg, version
]