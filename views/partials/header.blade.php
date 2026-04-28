<header class="border-b border-base-300 bg-base-100">
  <div class="navbar mx-auto w-full max-w-5xl flex-wrap px-4 sm:px-6 lg:px-8">
    <div class="navbar-start min-w-0">
      <a class="truncate text-base font-semibold text-base-content no-underline" href="{{ evo()->makeUrl((int) evo()->getConfig('site_start')) }}">
        {{ evo()->getConfig('site_name') ?: 'Evolution CMS' }}
      </a>
    </div>

    @if(!empty($menu))
      <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal gap-1 px-1" aria-label="Primary navigation">
          @foreach($menu as $item)
            <li>
              <a
                class="@if(in_array((int) $item['id'], $parentIds ?? [], true)) active @endif"
                href="{{ evo()->makeUrl((int) $item['id']) }}"
                @if(in_array((int) $item['id'], $parentIds ?? [], true)) aria-current="page" @endif
              >
                {{ $item['menutitle'] ?: $item['pagetitle'] }}
              </a>
            </li>
          @endforeach
        </ul>
      </div>
    @endif

    <div class="navbar-end gap-3">
      <label class="hidden cursor-pointer items-center gap-2 sm:flex" title="Switch light and dark themes">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 opacity-70" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
          <circle cx="12" cy="12" r="4"></circle>
          <path d="M12 2v2m0 16v2M4.93 4.93l1.41 1.41m11.32 11.32 1.41 1.41M2 12h2m16 0h2M4.93 19.07l1.41-1.41M17.66 6.34l1.41-1.41"></path>
        </svg>
        <input type="checkbox" class="theme-controller toggle toggle-sm" value="dark" data-theme-toggle>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 opacity-70" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
          <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
        </svg>
      </label>

      <select class="select select-bordered select-sm w-36" data-theme-select aria-label="Theme">
        <option value="light">Light</option>
        <option value="dark">Dark</option>
        <option value="cupcake">Cupcake</option>
        <option value="emerald">Emerald</option>
        <option value="corporate">Corporate</option>
        <option value="synthwave">Synthwave</option>
        <option value="retro">Retro</option>
        <option value="dracula">Dracula</option>
        <option value="night">Night</option>
        <option value="nord">Nord</option>
      </select>
    </div>

    @if(!empty($menu))
      <div class="w-full border-t border-base-300 py-2 lg:hidden">
        <ul class="menu menu-horizontal flex-wrap gap-1 px-0" aria-label="Primary navigation">
          @foreach($menu as $item)
            <li>
              <a
                class="@if(in_array((int) $item['id'], $parentIds ?? [], true)) active @endif"
                href="{{ evo()->makeUrl((int) $item['id']) }}"
                @if(in_array((int) $item['id'], $parentIds ?? [], true)) aria-current="page" @endif
              >
                {{ $item['menutitle'] ?: $item['pagetitle'] }}
              </a>
            </li>
          @endforeach
        </ul>
      </div>
    @endif
  </div>
</header>
