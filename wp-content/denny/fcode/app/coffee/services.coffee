# Services


# Demonstrate how to register services
# In this case it is a simple value service.
host = "http://127.0.0.1\\:8081"

xzbAppServices = angular.module 'xzbApp.services', ['ngResource']

xzbAppServices.value 'version', '0.0.1'


xzbAppServices.factory 'articleService', ($resource) ->
	$resource "#{host}/:verb", {}
		get:
			method: 'GET'
			params:
				verb: 'api_get_post'
				id: ''
		query:
			method: 'GET'
			params:
				verb: 'api_list_user_post'
				userid: 'denny'
				date: '2013-01-24'
			isArray: true

###
xzbAppServices.factory 'articleService', ($resource) ->
	$resource 'articles/:id.json', {}, 
		query:
			method: 'GET'
			params:
				id: 'articles'
			isArray: true
###
