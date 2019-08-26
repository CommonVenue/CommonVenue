<div class="row">
  @php

      if (Voyager::translatable($items)) {
          $items = $items->load('translations');
      }

  @endphp

  @foreach ($items as $item)

      @php

          $originalItem = $item;
          if (Voyager::translatable($item)) {
              $item = $item->translate($options->locale);
          }

          $isActive = null;
          $icon = null;

          // Check if link is current
          if(url($item->link()) == url()->current()){
              $isActive = 'active';
          }

          // Set Icon
          if(isset($options->icon) && $options->icon == true){
              $icon = '<i class="' . $item->icon_class . '"></i>';
          }

      @endphp
      <div class="col-lg-3">

        <div class="site_footer_column site_footer_links">
          <h4 class="site_footer_links_title">{{ $item->title }}</h4>
          @if(!$originalItem->children->isEmpty())
            <ul class="list-unstyled">
              @foreach($originalItem->children as $child)
                <li>
                  <a href="{{ url($child->link()) }}" target="{{ $child->target }}">
                    {{ $child->title }}
                  </a>
                </li>
              @endforeach
            </ul>
          @endif
        </div>

      </div>
  @endforeach
</div>
