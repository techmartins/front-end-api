<nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
  <button class="navbar-toggler" type="button" data-toggle="collapse" 
          data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbar">
    <ul class="navbar-nav mr-auto">
      <li @if($current=="home") class="nav-item active" @else class="nav-item" @endif>
        <a class="nav-link" href="/">Início </a>
      </li>
      <li @if($current=="vendedores") class="nav-item active" @else class="nav-item" @endif>
        <a class="nav-link" href="/vendedores">Vendedores</a>
      </li>
      <li @if($current=="vendas") class="nav-item active" @else class="nav-item" @endif>
        <a class="nav-link" href="/vendas">Vendas </a>
      </li>
        
    </ul>

  </div>
</nav>