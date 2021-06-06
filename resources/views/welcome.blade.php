<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="486.60751953125px" height="138.8298828125px" viewBox="6.696240234375011 5.585058593750006 486.60751953125 138.8298828125" style="background: rgba(0, 0, 0, 0);" preserveAspectRatio="xMidYMid"><defs><filter id="editing-stripe-bk" filterUnits="userSpaceOnUse" x="-100%" y="-100%" width="300%" height="300%"><feFlood flood-color="#700f0f" result="flood1"/><feFlood flood-color="#fff" flood-opacity="0.5" result="flood2"/><feImage xlink:href="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMDAwcHgiIGhlaWdodD0iMTAwMHB4Ij48ZGVmcz48cGF0dGVybiBpZD0icGF0dGVybiIgcGF0dGVyblVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeD0iMCIgeT0iMCIgd2lkdGg9IjQiIGhlaWdodD0iNCI+PHBhdGggZD0iTSAtNCAtNCBMIDggOCBNIC04IC00IEwgNCA4IE0gLTQgLTggTCA4IDQiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLXdpZHRoPSIxIi8+PC9wYXR0ZXJuPjwvZGVmcz48cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSJ1cmwoI3BhdHRlcm4pIi8+PC9zdmc+" x="0" y="0" width="2000" height="1000" result="image"/><feTile in="image" result="tile"/><feComposite operator="in" in="flood1" in2="tile" result="tile2"/><feGaussianBlur in="SourceAlpha" stdDeviation="10" result="blur"/><feComposite operator="in" in="tile2" in2="blur" result="cloud"/><feMorphology operator="dilate" radius="2" in="SourceAlpha" result="dilate"/><feComposite operator="in" in="flood2" in2="dilate" result="base"/><feMerge><feMergeNode in="cloud"/><feMergeNode in="base"/><feMergeNode in="SourceGraphic"/></feMerge></filter></defs><g filter="url(#editing-stripe-bk)"><g transform="translate(77.42499685287476, 98.06999969482422)"><path d="M24.70 0.51L24.70 0.51Q18.30 0.51 13.63-2.27L13.63-2.27L13.63-2.27Q8.96-5.06 6.43-10.27L6.43-10.27L6.43-10.27Q3.90-15.49 3.90-22.59L3.90-22.59L3.90-22.59Q3.90-29.63 6.43-34.85L6.43-34.85L6.43-34.85Q8.96-40.06 13.63-42.85L13.63-42.85L13.63-42.85Q18.30-45.63 24.70-45.63L24.70-45.63L24.70-45.63Q28.99-45.63 32.80-44.26L32.80-44.26L32.80-44.26Q36.61-42.88 39.42-40.32L39.42-40.32L39.42-40.32Q40.45-39.36 40.45-38.08L40.45-38.08L40.45-38.08Q40.45-37.18 39.94-36.51L39.94-36.51L39.94-36.51Q39.42-35.84 38.72-35.84L38.72-35.84L38.72-35.84Q37.95-35.84 36.86-36.54L36.86-36.54L36.86-36.54Q33.60-39.10 30.94-40.13L30.94-40.13L30.94-40.13Q28.29-41.15 24.83-41.15L24.83-41.15L24.83-41.15Q17.41-41.15 13.41-36.32L13.41-36.32L13.41-36.32Q9.41-31.49 9.41-22.59L9.41-22.59L9.41-22.59Q9.41-13.63 13.41-8.80L13.41-8.80L13.41-8.80Q17.41-3.97 24.83-3.97L24.83-3.97L24.83-3.97Q28.22-3.97 30.91-4.99L30.91-4.99L30.91-4.99Q33.60-6.02 36.86-8.58L36.86-8.58L36.86-8.58Q37.95-9.28 38.72-9.28L38.72-9.28L38.72-9.28Q39.42-9.28 39.94-8.64L39.94-8.64L39.94-8.64Q40.45-8 40.45-7.04L40.45-7.04L40.45-7.04Q40.45-5.76 39.42-4.80L39.42-4.80L39.42-4.80Q36.61-2.24 32.80-0.86L32.80-0.86L32.80-0.86Q28.99 0.51 24.70 0.51L24.70 0.51ZM51.58 0L51.58 0Q50.37 0 49.63-0.70L49.63-0.70L49.63-0.70Q48.90-1.41 48.90-2.56L48.90-2.56L48.90-42.56L48.90-42.56Q48.90-43.71 49.63-44.42L49.63-44.42L49.63-44.42Q50.37-45.12 51.58-45.12L51.58-45.12L64.06-45.12L64.06-45.12Q74.88-45.12 80.80-39.26L80.80-39.26L80.80-39.26Q86.72-33.41 86.72-22.59L86.72-22.59L86.72-22.59Q86.72-11.78 80.77-5.89L80.77-5.89L80.77-5.89Q74.82 0 64.06 0L64.06 0L51.58 0ZM54.14-4.48L63.74-4.48L63.74-4.48Q81.28-4.48 81.28-22.59L81.28-22.59L81.28-22.59Q81.28-40.64 63.74-40.64L63.74-40.64L54.14-40.64L54.14-4.48ZM129.28-44.10L129.28-44.10Q129.60-44.80 130.21-45.18L130.21-45.18L130.21-45.18Q130.82-45.57 131.52-45.57L131.52-45.57L131.52-45.57Q132.54-45.57 133.34-44.90L133.34-44.90L133.34-44.90Q134.14-44.22 134.14-43.26L134.14-43.26L134.14-43.26Q134.14-42.75 133.89-42.24L133.89-42.24L115.52-1.41L115.52-1.41Q115.14-0.58 114.37-0.13L114.37-0.13L114.37-0.13Q113.60 0.32 112.70 0.32L112.70 0.32L112.70 0.32Q111.81 0.32 111.04-0.13L111.04-0.13L111.04-0.13Q110.27-0.58 109.89-1.41L109.89-1.41L91.58-42.24L91.58-42.24Q91.39-42.75 91.39-43.20L91.39-43.20L91.39-43.20Q91.39-44.22 92.22-44.90L92.22-44.90L92.22-44.90Q93.06-45.57 94.08-45.57L94.08-45.57L94.08-45.57Q95.62-45.57 96.32-44.10L96.32-44.10L112.83-6.78L129.28-44.10ZM171.33 0.51L171.33 0.51Q166.53 0.51 162.14-0.93L162.14-0.93L162.14-0.93Q157.76-2.37 155.14-4.80L155.14-4.80L155.14-4.80Q154.18-5.70 154.18-7.04L154.18-7.04L154.18-7.04Q154.18-7.94 154.69-8.61L154.69-8.61L154.69-8.61Q155.20-9.28 155.90-9.28L155.90-9.28L155.90-9.28Q156.74-9.28 157.70-8.58L157.70-8.58L157.70-8.58Q163.65-3.97 171.26-3.97L171.26-3.97L171.26-3.97Q176.77-3.97 179.71-6.08L179.71-6.08L179.71-6.08Q182.66-8.19 182.66-12.10L182.66-12.10L182.66-12.10Q182.66-14.34 181.25-15.71L181.25-15.71L181.25-15.71Q179.84-17.09 177.54-17.92L177.54-17.92L177.54-17.92Q175.23-18.75 171.33-19.65L171.33-19.65L171.33-19.65Q166.08-20.86 162.72-22.21L162.72-22.21L162.72-22.21Q159.36-23.55 157.28-26.05L157.28-26.05L157.28-26.05Q155.20-28.54 155.20-32.58L155.20-32.58L155.20-32.58Q155.20-36.42 157.28-39.39L157.28-39.39L157.28-39.39Q159.36-42.37 163.10-44L163.10-44L163.10-44Q166.85-45.63 171.65-45.63L171.65-45.63L171.65-45.63Q176.13-45.63 180-44.26L180-44.26L180-44.26Q183.87-42.88 186.50-40.32L186.50-40.32L186.50-40.32Q187.52-39.30 187.52-38.08L187.52-38.08L187.52-38.08Q187.52-37.18 187.01-36.51L187.01-36.51L187.01-36.51Q186.50-35.84 185.79-35.84L185.79-35.84L185.79-35.84Q185.09-35.84 183.94-36.54L183.94-36.54L183.94-36.54Q180.80-39.10 178.11-40.13L178.11-40.13L178.11-40.13Q175.42-41.15 171.65-41.15L171.65-41.15L171.65-41.15Q166.34-41.15 163.39-38.94L163.39-38.94L163.39-38.94Q160.45-36.74 160.45-32.77L160.45-32.77L160.45-32.77Q160.45-29.38 163.04-27.68L163.04-27.68L163.04-27.68Q165.63-25.98 171.01-24.70L171.01-24.70L171.01-24.70Q176.83-23.30 180.16-22.11L180.16-22.11L180.16-22.11Q183.49-20.93 185.70-18.56L185.70-18.56L185.70-18.56Q187.90-16.19 187.90-12.22L187.90-12.22L187.90-12.22Q187.90-8.45 185.82-5.57L185.82-5.57L185.82-5.57Q183.74-2.69 179.97-1.09L179.97-1.09L179.97-1.09Q176.19 0.51 171.33 0.51L171.33 0.51ZM228.86-3.97L228.86-3.97Q229.76-3.14 229.76-2.11L229.76-2.11L229.76-2.11Q229.76-1.22 229.02-0.48L229.02-0.48L229.02-0.48Q228.29 0.26 227.33 0.26L227.33 0.26L227.33 0.26Q226.50 0.26 225.60-0.51L225.60-0.51L201.66-21.44L201.66-2.37L201.66-2.37Q201.66-1.15 200.96-0.42L200.96-0.42L200.96-0.42Q200.26 0.32 199.04 0.32L199.04 0.32L199.04 0.32Q197.82 0.32 197.12-0.42L197.12-0.42L197.12-0.42Q196.42-1.15 196.42-2.37L196.42-2.37L196.42-42.75L196.42-42.75Q196.42-43.97 197.12-44.70L197.12-44.70L197.12-44.70Q197.82-45.44 199.04-45.44L199.04-45.44L199.04-45.44Q200.26-45.44 200.96-44.70L200.96-44.70L200.96-44.70Q201.66-43.97 201.66-42.75L201.66-42.75L201.66-24.38L224.51-44.67L224.51-44.67Q225.22-45.38 226.18-45.38L226.18-45.38L226.18-45.38Q227.14-45.38 227.84-44.64L227.84-44.64L227.84-44.64Q228.54-43.90 228.54-43.01L228.54-43.01L228.54-43.01Q228.54-42.05 227.71-41.22L227.71-41.22L207.04-23.04L228.86-3.97ZM239.17 0L239.17 0Q238.08 0 237.34-0.67L237.34-0.67L237.34-0.67Q236.61-1.34 236.61-2.43L236.61-2.43L236.61-42.75L236.61-42.75Q236.61-43.97 237.31-44.70L237.31-44.70L237.31-44.70Q238.02-45.44 239.23-45.44L239.23-45.44L239.23-45.44Q240.45-45.44 241.15-44.70L241.15-44.70L241.15-44.70Q241.86-43.97 241.86-42.75L241.86-42.75L241.86-4.48L262.53-4.48L262.53-4.48Q263.68-4.48 264.32-3.90L264.32-3.90L264.32-3.90Q264.96-3.33 264.96-2.24L264.96-2.24L264.96-2.24Q264.96-1.15 264.32-0.58L264.32-0.58L264.32-0.58Q263.68 0 262.53 0L262.53 0L239.17 0ZM273.86 0L273.86 0Q272.64 0 271.90-0.70L271.90-0.70L271.90-0.70Q271.17-1.41 271.17-2.56L271.17-2.56L271.17-42.56L271.17-42.56Q271.17-43.71 271.90-44.42L271.90-44.42L271.90-44.42Q272.64-45.12 273.86-45.12L273.86-45.12L297.79-45.12L297.79-45.12Q298.94-45.12 299.58-44.54L299.58-44.54L299.58-44.54Q300.22-43.97 300.22-42.94L300.22-42.94L300.22-42.94Q300.22-41.92 299.58-41.34L299.58-41.34L299.58-41.34Q298.94-40.77 297.79-40.77L297.79-40.77L276.35-40.77L276.35-25.09L296.51-25.09L296.51-25.09Q297.66-25.09 298.30-24.51L298.30-24.51L298.30-24.51Q298.94-23.94 298.94-22.91L298.94-22.91L298.94-22.91Q298.94-21.89 298.30-21.31L298.30-21.31L298.30-21.31Q297.66-20.74 296.51-20.74L296.51-20.74L276.35-20.74L276.35-4.35L297.79-4.35L297.79-4.35Q298.94-4.35 299.58-3.81L299.58-3.81L299.58-3.81Q300.22-3.26 300.22-2.18L300.22-2.18L300.22-2.18Q300.22-1.15 299.58-0.58L299.58-0.58L299.58-0.58Q298.94 0 297.79 0L297.79 0L273.86 0ZM311.04 0.32L311.04 0.32Q309.82 0.32 309.12-0.42L309.12-0.42L309.12-0.42Q308.42-1.15 308.42-2.37L308.42-2.37L308.42-42.56L308.42-42.56Q308.42-43.71 309.15-44.42L309.15-44.42L309.15-44.42Q309.89-45.12 311.10-45.12L311.10-45.12L326.27-45.12L326.27-45.12Q333.38-45.12 337.31-41.66L337.31-41.66L337.31-41.66Q341.25-38.21 341.25-31.87L341.25-31.87L341.25-31.87Q341.25-25.54 337.28-22.02L337.28-22.02L337.28-22.02Q333.31-18.50 326.27-18.50L326.27-18.50L313.66-18.50L313.66-2.37L313.66-2.37Q313.66-1.15 312.96-0.42L312.96-0.42L312.96-0.42Q312.26 0.32 311.04 0.32L311.04 0.32ZM313.66-22.85L325.76-22.85L325.76-22.85Q336.06-22.85 336.06-31.87L336.06-31.87L336.06-31.87Q336.06-40.77 325.76-40.77L325.76-40.77L313.66-40.77L313.66-22.85Z" fill="#de530f"/></g></g></svg>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Adam Owczarzak</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Maciej Kwiatkowski</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="col-12 p-6 flex items-center text-center" style="justify-content: center">
                        @include('product.show_multiple');
                    </div>


                </div>



                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>

                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                Shop
                            </a>

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
