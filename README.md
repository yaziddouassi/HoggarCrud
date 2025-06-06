# 🚀 Hoggar Starter Kit – Laravel + Inertia.js + Vue 3

A complete starter kit for quickly developing with Laravel 11, Inertia.js, Vue 3, Pinia, Quill.js, and the Hoggar CRUD generator.

---

## 📋 Requirements

- PHP 8.2+
- Node.js and npm
- Laravel 11 with Breeze (Inertia.js)
- Vite configured

---

## ⚙️ Installation

### 1. Install front-end dependencies

```bash
npm install quill@^2.0.3
npm install vue-chartjs chart.js
npm install pinia
```

---

### 2. Configure `resources/js/app.js`

```js
import '../css/app.css';
import './bootstrap';

import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { createApp, h } from 'vue';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';
import { createPinia } from 'pinia';

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';
const pinia = createPinia();

createInertiaApp({
  title: (title) => `${title} - ${appName}`,
  resolve: (name) =>
    resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
  setup({ el, App, props, plugin }) {
    return createApp({ render: () => h(App, props) })
      .use(plugin)
      .use(ZiggyVue)
      .use(pinia)
      .mount(el);
  },
  progress: {
    color: '#4B5563',
  },
});
```

---

### 3. Update `resources/views/app.blade.php`

```blade
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">
    <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @routes
    @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
    @inertiaHead
</head>
<body class="font-sans antialiased">
    @inertia
</body>
</html>
```

---

### 4. Put your gumroad Key in .env file

```bash
GUMROAD_LICENSE_KEY=YourGumroadKey
```

---

### 5. Install the Hoggar package

```bash
composer require hoggar/hoggar
php artisan migrate
php artisan hoggar:install
php artisan vendor:publish --tag=hoggar-config
php artisan storage:link
```

---

### 6. Create an admin user

```bash
php artisan make:hoggar-user
```

Then access the admin panel:

👉 http://localhost/admin/login

---

## 🧩 Included Features

- 🎨 Inertia Vue 3 interface
- 🧠 State management with Pinia
- 📝 Rich text with Quill.js
- 📊 Charts with Chart.js
- ⚡️ Full CRUD generator
- 🔒 Wizard Form
---

## 📚 Documentation

Created by Rabah Douassi.
Official documentation is here https://laravel-hoggar.dev
In the meantime, explore the code generated by Hoggar in the `app/` directory.

---

## 🛠️ Support

For questions or bug reports, please open an issue on the GitHub repository.

---

## License

MIT © [YourNameOrOrganization]
