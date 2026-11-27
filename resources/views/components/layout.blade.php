<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Job Board {{ isset($title) ? "- " . "$title" : "" }}</title>
            <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    </head>
<body>
  <nav aria-label="Breadcrumb">
    <ol class="flex items-center justify-center gap-1 text-sm text-gray-700">
      <li>
        <a href="/" class="block transition-colors hover:text-gray-900"> Home </a>
      </li>

      <li class="rtl:rotate-180">
        <svg
          aria-hidden="true"
          xmlns="http://www.w3.org/2000/svg"
          class="size-4"
          viewBox="0 0 20 20"
          fill="currentColor"
        >
          <path
            fill-rule="evenodd"
            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
            clip-rule="evenodd"
          />
        </svg>
      </li>

      <li>
        <a href="/about" class="block transition-colors hover:text-gray-900"> About </a>
      </li>

      <li class="rtl:rotate-180">
        <svg
          aria-hidden="true"
          xmlns="http://www.w3.org/2000/svg"
          class="size-4"
          viewBox="0 0 20 20"
          fill="currentColor"
        >
          <path
            fill-rule="evenodd"
            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
            clip-rule="evenodd"
          />
        </svg>
      </li>

      <li>
        <a href="/contact" class="block transition-colors hover:text-gray-900"> Contact Us </a>
      </li>
    </ol>
  </nav>
  @if (@isset($title))
  
  <header>
    <div>
      <h1 class="text-3xl font-bold tracking-tight text-gray-900"> {{ $title }}</h1>
    </div>
  </header>
  @endif
  <main>
    <div>
      {{ $slot }}
    </div>
  </main>
</body>
</html>
