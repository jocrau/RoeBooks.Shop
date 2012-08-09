# "Roe Books" Example

This is an example for a web application running on FLOW3. It's a simple bookshop which demonstrates some of the core features of FLOW3, including controllers, templating, forms, sessions and persistence.

## Setup

In order to try this example, you need to have a running web and database server:

Go to your web server's root directory and clone the FLOW3 Distribution:

	git clone --recursive git://git.typo3.org/FLOW3/Distributions/Base.git flow3
	cd flow3

Set the file permissions (please replace john by your own username. The second argument is supposed to be the username of your web server and the last one specifies the web server’s group):

	./flow3 flow3:core:setfilepermissions john _www _www

Create a new database and set the database credentials in your `<FLOW3_ROOT_DIR>/Configuration/Settings.yaml` file (YAML uses an indentation with exactly 2 spaces per level):

	TYPO3:
	  FLOW3:
	    persistence:
	      backendOptions:
	        host: 'localhost' # adjust to your database host
	        dbname: 'flow3' # adjust to your database name
	        user: 'root' # adjust to your database user
	        password: 'password' # adjust to your database password

Create and populate the database tables:

	./flow3 doctrine:migrate
	./flow3 doctrine:update

Install Twitter Bootstrap:

	./flow3 package:import Twitter.Bootstrap

Change into `<FLOW3_ROOT_DIR>/Packages/Application/` and clone the demo book shop:

	cd Packages/Application
	git clone git://github.com/robertlemke/RoeBooks.Shop.git

Navigate to `http://<web-server-root>/flow3/Web/roebooks.shop/book/index`. You should be all set now.

## What's Next?

For more information visit the [FLOW3 Quickstart Tutorial](http://flow3.typo3.org/documentation/quickstart.html).