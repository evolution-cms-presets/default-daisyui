@extends('layouts.base')

@section('title', $documentObject['longtitle'] ?? $documentObject['pagetitle'] ?? evo()->getConfig('site_name'))

@section('content')
  <article class="mx-auto max-w-3xl">
    @if(!empty($documentObject['content']))
      <div class="content-flow">
        {!! $documentObject['content'] !!}
      </div>
    @else
      <section class="space-y-8">
        <div class="space-y-4">
          <div class="badge badge-primary badge-outline">Evolution CMS + DaisyUI</div>
          <h1 class="max-w-2xl text-4xl font-semibold tracking-normal sm:text-5xl">
            {{ evo()->getConfig('site_name') ?: 'Evolution CMS' }}
          </h1>
          <p class="max-w-2xl text-lg leading-8 text-base-content/70">
            A compact project layer with DaisyUI components, Tailwind utilities, and theme switching ready on the first page.
          </p>
        </div>

        <div class="grid gap-4 sm:grid-cols-3">
          <div class="card border border-base-300 bg-base-100">
            <div class="card-body p-5">
              <h2 class="card-title text-base">Light and Dark</h2>
              <p class="text-sm text-base-content/70">The header toggle switches between clean light and dark modes.</p>
            </div>
          </div>
          <div class="card border border-base-300 bg-base-100">
            <div class="card-body p-5">
              <h2 class="card-title text-base">Theme Select</h2>
              <p class="text-sm text-base-content/70">The select menu applies DaisyUI themes and remembers the choice.</p>
            </div>
          </div>
          <div class="card border border-base-300 bg-base-100">
            <div class="card-body p-5">
              <h2 class="card-title text-base">Project Layer</h2>
              <p class="text-sm text-base-content/70">Controllers, views, and theme assets stay small and replaceable.</p>
            </div>
          </div>
        </div>
      </section>
    @endif
  </article>
@endsection
