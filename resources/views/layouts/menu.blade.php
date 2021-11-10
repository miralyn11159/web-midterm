<li class="nav-item">
    <a href="{{ route('orders.index') }}"
       class="nav-link {{ Request::is('orders*') ? 'active' : '' }}">
        <p>Orders</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('logs.index') }}"
       class="nav-link {{ Request::is('logs*') ? 'active' : '' }}">
        <p>Logs</p>
    </a>
</li>


