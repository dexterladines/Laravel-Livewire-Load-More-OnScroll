<!DOCTYPE html>
<html>
<head>
    <title>Laravel Livewire Example</title>
    @livewireStyles
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    
<div class="container">
    
    <div class="card">
      <div class="card-header text-center">
        <h3>Laravel Livewire Example</h3>
      </div>
      <div class="card-body">
        @livewire('load-more-user')
      </div>
    </div>
        
</div>
    
</body>
  
@livewireScripts
  
<script type="text/javascript">
      window.onscroll = function(ev) {
          if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
              window.livewire.emit('load-more');
          }
      };
</script>
  
</html>