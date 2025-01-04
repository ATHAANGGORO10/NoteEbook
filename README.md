
| configuration/installation/database |

# Configuration Storage Link :
## commad prompt
```bash
   php artisan storag:link
```

# Configuration Database :
## command prompt 
```bash
   cp .env.example .env
```

## Configuration ENV :
```bash
   DB_CONNECTION=your_connection
   DB_HOST=127.0.0.1
   DB_PORT=****
   DB_DATABASE=your_database
   DB_USERNAME=root
   DB_PASSWORD=your_password
```

## Run migrate database :
```bash
   php artisan migrate
   php artisan migrate:status
```

## Run server laravel :
```bash
   php artisan serve
```

| configuration/installation/tailwindcss |

# Configuration tailwindcss :
## command prompt
```bash
   npm install -D tailwindcss postcss autoprefixer
   npx tailwindcss init -p
```
## Run server tailwindcss :
```bash
   npm run dev
```

# Configuration tailwindcss.config.js :
```javascript
  content: [
    "./resources/**/*.blade.php", 
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
```

# Configuration app.css :
```css
  @tailwind base;
  @tailwind components;
  @tailwind utilities;
```

# Configuration app.blade.php :
```blade
  @vite('resources/css/app.css', 'resources/js/app.js')
```

| configuration/installation/animatecss |

# Configuration Animate.css :
## command prompt
```bash
   npm install animate.css --save
```

## Configuration app.js :
```bash
   import 'animate.css';
```

| configuration/installation/aos |

# Configuration AOS :
## command prompt
```bash
   npm install aos --save
```

## Configuration app.js :
```javascript
   import AOS from 'aos';
   import 'aos/dist/aos.css';
   AOS.init();'
```