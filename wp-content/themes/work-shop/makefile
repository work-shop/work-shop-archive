# Makefile for command-line+browser-based wordpress development

# MYSQL information
MYSQL_USER	= root
MYSQL_PASS 	= root
MYSQL_DB	= ws_wp_db

# Workspace Configuration
WORKSPACE 	= /Applications/MAMP/htdocs/work-shop
THEME 		= $(WORKSPACE)/wp-content/themes/work-shop
SQL 		= /Applications/MAMP/Library/bin/mysql
SQL_ARGS 	= --user=$(MYSQL_USER) --host=localhost --password=$(MYSQL_PASS)

# Build Configuration
PORT 		= 8888
TARGET 		= work-shop
SQL 		= /Applications/MAMP/Library/bin


# default targer
all: open-frontend

push:
	git push origin master

pull:
	git pull origin master

push-db-prep:
	cd $(THEME)
	git checkout master
	rm -f _databases/dump.sql
	git add -A $(WORKSPACE)
	git commit -m "removed previous database"
	git push origin master

pull-db-prep: 
	cd $(THEME)
	rm -f _databases/dump.sql

imp-db:
	cd $(WORKSPACE)
	/Applications/MAMP/Library/bin/mysql $(SQL_ARGS) $(MYSQL_DB) < _databases/dump.sql


exp-db:
	cd $(WORKSPACE)
	/Applications/MAMP/Library/bin/mysqldump $(SQL_ARGS) $(MYSQL_DB) > _databases/dump.sql


push-db: push-db-prep exp-db push

pull-db: pull-db-prep pull imp-db


open-frontend:
	open http://localhost:$(PORT)/$(TARGET)

open-backend:
	open http://localhost:$(PORT)/$(TARGET)/wp-admin

server-config:
	open http://localhost:$(PORT)/MAMP/?language=English
