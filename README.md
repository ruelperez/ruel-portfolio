## My Portfolio
- [ruel-portfolio.tech/portfolio](https://www.ruel-portfolio.tech/portfolio)
### Download and install the following tools:
- [**NodeJS**](https://nodejs.org/) to execute `npm` commands.
- IDE code editor such as
  [VS Code](https://code.visualstudio.com),
  [WebStorm](https://www.jetbrains.com/webstorm) or
  [Sublime Text](https://www.sublimetext.com).
- [Composer](https://getcomposer.org/download/)

### Installation

1. Clone or download this repository [ruel-porfolio](https://github.com/ruelperez/ruel-portfolio)
2. Open the cloned project in your code editor.
3. Open terminal and execute the following commands:

#### Install Backend dependencies:
    composer install
#### Install Frontend dependencies:
    npm install
#### Create Environment File:
    cp .env.example .env
#### Generate Application Key:
    php artisan key:generate
#### Compile Assets:
    npm run dev
#### Serve the Application:
    php artisan serve

    

### Production
- Access <http://127.0.0.1:8000> in your web browser.

### Technologies Used
- [Laravel Livewire](https://laravel-livewire.com/) both **front-end** and **back-end**.
- [Tailwind CSS](https://tailwindcss.com/docs/guides/laravel)


