<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-image: url('img/nav.png');">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <b><x-responsive-nav-link :href="URL('/dashboard')">
                  {{ __('หน้าหลัก') }}
          </x-responsive-nav-link></b>
        </li>
        <li class="nav-item">
          <b><x-responsive-nav-link :href="route('myday', ['userId' => Auth::user()->id])">
                  {{ __('บันทึกประจำวัน') }}
              </x-responsive-nav-link>
          </b>
        </li>
        <li class="nav-item">
          <b><x-responsive-nav-link :href="route('advice')">
                  {{ __('คำแนะนำ') }}
              </x-responsive-nav-link>
          </b>
        </li>
        <li class="nav-item">
          <b><x-responsive-nav-link :href="route('test', ['userId' => Auth::user()->id])">
                  {{ __('แบบทดสอบบุคลิกภาพ') }}
              </x-responsive-nav-link>
          </b>
        </li>
        <li class="nav-item">
          <b><x-responsive-nav-link :href="route('profile.edit')">
                  {{ __('Profile') }}
              </x-responsive-nav-link>
          </b>
        </li>
        
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <li class="nav-item">
            <button type="button" class="btn btn-warning btn-sm">
              <b><x-responsive-nav-link :href="URL('/dashboard')" style="color: white;">
                สวัสดี {{ Auth::user()->name }}
                  </x-responsive-nav-link>
              </b>
            </button>
          </li>
          <li class="nav-item">
          <b> 
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="button" class="btn btn-danger btn-sm">
                  <x-responsive-nav-link :href="route('logout')" style="color: white;"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Log Out') }}
                  </x-responsive-nav-link>
                </button>
                
            </form>
          </b>
        </li>

        </div>
       
      </ul>
    </div>
  </div>        
</div>
</nav>
<div class="pt-3 mt-4 text-muted border-top"></div>