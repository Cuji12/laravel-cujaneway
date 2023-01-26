## Installation 
1. Install the repository `git clone https://github.com/Cuji12/laravel-cujaneway.git`
2. Ensure you have PHP 8.1+ installed on your machine with the necessary extensions enabled. You can find a list of what extensions you need by using: `composer check-platform-reqs` in the project folder.
3. After enabling the necessary PHP extensions, run `composer install`. 
4. You'll need Node 16+ to use Vite with this project, I recommend installing the latest LTS.
5. Run `npm install`.
6. Create a .env file by copying the contents of the .env-example file and populate the values needed to connect to the DB and seed it.
7. Generate an app key `php artisan key:generate`.
8. Open Bash in the PHP container with `docker exec -it laravel-cujaneway-cujaneway-1 bash` (don't mind the stupid name).
9. Run the migrations and seed the DB `php artisan migrate | php artisan db:seed`.
10. Sail is used to build the containers & interact with Docker, run `./vendor/bin/sail up` in the root project folder.
11. After your containers have been built and are running, run the local development server to enable Hot Module Reloading and compile your assets `npm run dev`.
12. Navigate to http://localhost:80 and you're all set!

## Fly.io
This project is deployed to Fly.io, taking the Docker image and transmogrifying them into Firecracker Micro VMs, to deploy to Fly.io you'll need to create an account with them and authorize your usage of the CLI with the given account. 

Here are some helpful commands:
- Deploy from your working directory: `fly deploy`
- SSH into the production server: `fly ssh console`
- Print list of SSL certs: `fly certs list`
- Manually scale server: `fly scale {256, 512, 1024, 2048, 4096}`
- Set production secrets (fly.toml is in source control, use this to set secrets in production like DB username & password): `fly secrets set MY_SECRET=SECRET_VALUE`

## Helpful Stuff
Running `./vendor/bin/sail up` is clearly taxing on the fingers so lets create an alias.
1. Open your terminal and enter `alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'`.
2. Restart your terminal, and now you'll have access to `sail up` and all other `sail` commands.
3. This project uses Laravel Backpack, navigate to http://localhost/admin and enter the details you seeded into the DB. 

