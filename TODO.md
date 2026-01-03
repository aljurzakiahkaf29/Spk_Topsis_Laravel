# TODO: Fix Login Page Issues

## Step 1: Update Migration to Add Username Column
- Edit `database/migrations/2025_12_04_074020_create_tbl_user_table.php` to add 'username' column.

## Step 2: Update Model to Include Username in Fillable
- Edit `app/Models/M_User.php` to add 'username' to the fillable array.

## Step 3: Create User Seeder
- Create `database/seeders/UserSeeder.php` with a default admin user.
- Update `database/seeders/DatabaseSeeder.php` to call the UserSeeder.

## Step 4: Run Migrations and Seeders
- Run `php artisan migrate` to apply migrations.
- Run `php artisan db:seed` to seed the database.

## Step 5: Test Login Functionality
- Verify that the login page works with the seeded user.
