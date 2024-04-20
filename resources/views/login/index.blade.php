<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login - Swenson Simanjuntak</title>
    <script>
        if (
            localStorage.theme === "dark" ||
            (!("theme" in localStorage) &&
                window.matchMedia("(prefers-color-scheme: dark)").matches)
        ) {
            document.documentElement.classList.add("dark");
        } else {
            document.documentElement.classList.remove("dark");
        }
    </script>
    <script type="module" crossorigin src="/assets/index-B3ZH81ZW.js"></script>
    <link rel="stylesheet" crossorigin href="/assets/index-BEP2cC18.css">
</head>

<body class="bg-cyan-100 transition duration-300 dark:bg-dark">
    <div id="root"></div>
</body>

</html>
