
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://daemonite.github.io/material/css/material.min.css" rel="stylesheet">
<style type="text/css">
    label {
      width: 100%;
      font-size: 1rem;
  }


  .card-input-element+.card:hover {
      cursor: pointer;
  }

  .card-input-element:checked+.card {
      border: 2px solid var(--primary);
      -webkit-transition: border .3s;
      -o-transition: border .3s;
      transition: border .3s;
  }

  .card-input-element:checked+.card::after {
      content: '\e5ca';
      color: #AFB8EA;
      font-family: 'Material Icons';
      font-size: 24px;
      -webkit-animation-name: fadeInCheckbox;
      animation-name: fadeInCheckbox;
      -webkit-animation-duration: .5s;
      animation-duration: .5s;
      -webkit-animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
      animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  }

  @-webkit-keyframes fadeInCheckbox {
      from {
        opacity: 0;
        -webkit-transform: rotateZ(-20deg);
    }
    to {
        opacity: 1;
        -webkit-transform: rotateZ(0deg);
    }
}

@keyframes fadeInCheckbox {
  from {
    opacity: 0;
    transform: rotateZ(-20deg);
}
to {
    opacity: 1;
    transform: rotateZ(0deg);
}
}
</style>

<div class="container">
  <div class="row mt-4">
    
    <label>
      <input type="radio" name="demo" class="card-input-element d-none" id="demo1">
      <span class="card card-body bg-light d-flex flex-row justify-content-between align-items-center">
          Organization 1
      </span>
  </label>
  <label class="mt-3">
      <input type="radio" name="demo" class="card-input-element d-none" value="demo2">
      <span class="card card-body bg-light d-flex flex-row justify-content-between align-items-center">
          Organization 2
      </span>
  </label>
</div>
</div>
</div>