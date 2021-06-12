<div class="mobile-menu__links-panel" data-mobile-menu-panel>
                                <div class="mobile-menu__panel mobile-menu__panel--hidden">
                                    <div class="mobile-menu__panel-header">
                                        <button class="mobile-menu__panel-back" type="button">
                                            <svg width="7" height="11">
                                                <path d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
                                            </svg>
                                        </button>
                                        <div class="mobile-menu__panel-title">{{ __('global.category') }}</div>
                                    </div>
                                    <div class="mobile-menu__panel-body">
                                        <ul class="mobile-menu__links">
                                            @foreach($categories as $category)
                                                <li data-mobile-menu-item>
                                                    <a href="{{ route('category.list', $category->id) }}" class="" data-mobile-menu-trigger>
                                                        {{ $category->name }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>