# Qedit-Website

## Getting Started
1. Install Docker v17+ (and Docker-Compose v1.1+)
2. Clone repository
3. Make sure `data/db.sql` exists
4. Unzip contents from `Uploads.zip` to `wordpress/wp-content/uploads`
3. Set file premissions if necessary  
`sudo chmod -R 777 wordpress/wp-content/uploads`  
`sudo chmod -R 777 data`  
5. Compile Sass: `npm run sass:compile`  
  *Requires Sass to be installed
6. run `docker-compose up`  

## Web Access
* Website: `<docker-machine-ip>:8080`  
* Wordpress Dashboard: `<docker-machine-ip>:8080/wp-admin`
* Username: `admin`
* Password: `admin`  

## Development
* Enter Server Container: `npm run ssh:server`
* Compile Sass: `npm run sass:compile`  
* Watch Sass Directory: `npm run sass:watch`
* Ignore file permission changes on git:  `git config core.filemode false`

## Backup & Restore DB
SQL File: `data/db.sql`  
### Backup
`npm run db:backup`


### Restore
`npm run db:restore`  
* Backup file should be restored upon container start  


## Production  
1. Change `Other Pages Menu` custom links URL for `Prover` & `Contact Us`
2. Reset permissions to 755


