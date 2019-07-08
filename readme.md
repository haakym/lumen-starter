# Lumen Starter

## Getting Started

Create `.env` file

```bash
cp .env.example .env
```

Generate a 32 character string for the `APP_KEY` (Lumen doesn't come with `artisan key:generate` by default)

```bash
php -r "require 'vendor/autoload.php'; echo str_random(32).PHP_EOL;" | pbcopy
```

piping to `pbcopy` will put the key into your clipboard

There are other ways to generate keys discussed here: https://stackoverflow.com/questions/30344141/lumen-micro-framework-php-artisan-keygenerate

Paste the newly generated key into the `.env` file, e.g.

```env
APP_KEY=e3gjFSOI6uvgaIDyxbtqHuu96rM1vZ7b
```

If you'll be interacting with a database, please update the `.env` with your database credentials.

To get started quickly, you can spin up a server using PHP:

```bash
php -S localhost:8000 -t public
```

## Testing

### Test Suite

- todo

### Postman

Browsers cannot perform all HTTP methods so you can use a tool such as Postman to test out HTTP methods such as PUT, PATCH, OPTIONS, etc.