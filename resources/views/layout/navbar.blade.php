<nav class="bg-white border-b px-2 py-2 mx-2 border-gray-200 shadow-sm rounded-md" x-data="{ open: false }">
  <ul class="flex items-center text-sm font-medium text-gray-800">
    <li class="relative mx-1">
      <a class="block px-2 py-1 text-gray-800 hover:text-gray-600 transition-colors rounded no-underline" href="{{route('ogolne.start')}}">Start</a>
    </li>
    <li class="relative mx-1">
      <a class="block px-2 py-1 text-gray-800 hover:text-gray-600 transition-colors rounded" href="{{route('ogolne.kontakt')}}">Kontakt</a>
    </li>
    <li class="relative mx-1">
      <a class="block px-2 py-1 text-gray-800 hover:text-gray-600 transition-colors rounded" href="{{route('ogolne.onas')}}">O nas</a>
    </li>
@auth
    <li class="relative mx-1">
      <a class="block px-2 py-1 text-gray-800 hover:text-gray-600 transition-colors rounded" href="{{route('ogolne.onas')}}">O nas 2</a>
    </li>
@endauth
  </ul>
</nav>
