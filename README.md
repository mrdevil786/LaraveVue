<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Running the Project

To run this Laravel and Vue project, follow these steps:

### Prerequisites

Make sure you have the following installed on your machine:

- PHP (>= 8.2)
- Composer
- Node.js (>= 14.x)
- npm or Yarn

### Setup Laravel

1. **Clone the repository**:
   ```bash
   git clone https://github.com/your-username/your-repo-name.git
   cd your-repo-name
   ```

2. **Install PHP dependencies**:
   Run the following command to install the required PHP packages:
   ```bash
   composer install
   ```

3. **Set up your environment**:
   Copy the `.env.example` file to `.env`:
   ```bash
   cp .env.example .env
   ```

4. **Generate the application key**:
   ```bash
   php artisan key:generate
   ```

5. **Run migrations**:
   If you have a database set up, run the migrations:
   ```bash
   php artisan migrate
   ```

### Setup Vue with Vite

1. **Install Node.js dependencies**:
   Navigate to the project root and run:
   ```bash
   npm install
   ```

2. **Run the development server**:
   You can run both Laravel and Vue development servers concurrently using:
   ```bash
   npm run dev
   ```

   This command will start the Laravel server and the Vite development server, allowing you to work on both the backend and frontend simultaneously.

### Access the Application

Open your browser and go to `http://localhost:8000` to view the Laravel application. The Vite server will
