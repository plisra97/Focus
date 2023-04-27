<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Focus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Myeongjo:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
</head>
  <body>
   {{-- inizio navbar --}}
 
  <nav class="navbar navbar-expand-lg my-5 bg-dark p-5 ">
    <div class="container-fluid  d-flex justify-content-center align-items-center">
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse d-flex justify-content-center align-items-center" id="navbarNav">
        <ul class="navbar-nav  ">
            <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="{{route('homepage')}}">Home Page</a>
            </li>
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="{{route('chi-siamo')}}">Chi Siamo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{route('servizi')}}">Servizi</a>
          </li>
          
          
        </ul>
      </div>
    </div>
  </nav>
   {{-- fine navbar --}}
  
  <div class="container">
    <div class="row justify-content-start m-5">
        <h3 class="border-bottom border-dark"> Video Maker</h3>
        <div class="col-12  d-flex">
            <img src="/media/videomaker.jpg" alt="" class="imgOrizontal m-5">
            
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis saepe repellendus aut, dolor molestias delectus perferendis ipsum excepturi, nulla vel eum accusantium optio, alias reprehenderit a placeat reiciendis modi esse? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum corrupti unde praesentium. Sequi est perspiciatis, necessitatibus et laborum veniam a reprehenderit nisi amet voluptas ullam repudiandae voluptates eius neque at. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet autem accusantium beatae. Doloribus cum sint quisquam tenetur repudiandae? Nulla repudiandae aliquid optio consequuntur tenetur quae ab possimus animi reprehenderit autem! Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, ad alias laboriosam harum unde aliquam fugiat natus rem sapiente tempore cum beatae id dolores totam dolorem libero. Nesciunt, quasi Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos libero dolorem reprehenderit fuga dignissimos. Tempore earum quaerat sint velit quas perspiciatis mollitia, error magnam, accusamus quasi iusto est odit quidem. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio atque at facilis modi! Deleniti ea pariatur nihil laudantium aliquid, similique ut quas itaque ipsum nisi accusantium, architecto aperiam asperiores quia!</p>
        </div>
    </div>
    <div class="row justify-content-end align-items-end">
        <h3 class="border-bottom border-dark text-end"> Fotografo </h3>
        <div class="col-12  d-flex ">
            
            <p class="m-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis saepe repellendus aut, dolor molestias delectus perferendis ipsum excepturi, nulla vel eum accusantium optio, alias reprehenderit a placeat reiciendis modi esse? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum corrupti unde praesentium. Sequi est perspiciatis, necessitatibus et laborum veniam a reprehenderit nisi amet voluptas ullam repudiandae voluptates eius neque at. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet autem accusantium beatae. Doloribus cum sint quisquam tenetur repudiandae? Nulla repudiandae aliquid optio consequuntur tenetur quae ab possimus animi reprehenderit autem! Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, ad alias laboriosam harum unde aliquam fugiat natus rem sapiente tempore cum beatae id dolores totam dolorem libero. Nesciunt, quasi Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos libero dolorem reprehenderit fuga dignissimos. Tempore earum quaerat sint velit quas perspiciatis mollitia, error magnam, accusamus quasi iusto est odit quidem. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio atque at facilis modi! Deleniti ea pariatur nihil laudantium aliquid, similique ut quas itaque ipsum nisi accusantium, architecto aperiam asperiores quia! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam voluptatum enim exercitationem inventore, beatae facere eligendi perspiciatis blanditiis neque rem a accusantium placeat eaque reiciendis laboriosam in voluptas at sed. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum rerum nisi iusto, velit nam similique quisquam modi eaque dignissimos explicabo repudiandae molestias aut veniam maiores quae debitis sapiente eligendi excepturi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni nemo, nostrum, accusamus laborum quas error praesentium eius mollitia nulla quasi maiores necessitatibus fuga molestias vitae accusantium id, ipsum cum deserunt!</p>
            <img src="/media/fotografo.jpg" alt="" class="imgVertical ">
        </div>
    </div>
    <div class="row justify-content-start m-5">
        <h3 class="border-bottom border-dark"> Passione </h3>
        <div class="col-12  d-flex">
            <img src="/media/passione.jpg" alt="" class="imgOrizontal m-5">
            
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis saepe repellendus aut, dolor molestias delectus perferendis ipsum excepturi, nulla vel eum accusantium optio, alias reprehenderit a placeat reiciendis modi esse? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum corrupti unde praesentium. Sequi est perspiciatis, necessitatibus et laborum veniam a reprehenderit nisi amet voluptas ullam repudiandae voluptates eius neque at. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet autem accusantium beatae. Doloribus cum sint quisquam tenetur repudiandae? Nulla repudiandae aliquid optio consequuntur tenetur quae ab possimus animi reprehenderit autem! Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, ad alias laboriosam harum unde aliquam fugiat natus rem sapiente tempore cum beatae id dolores totam dolorem libero. Nesciunt, quasi Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos libero dolorem reprehenderit fuga dignissimos. Tempore earum quaerat sint velit quas perspiciatis mollitia, error magnam, accusamus quasi iusto est odit quidem. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio atque at facilis modi! Deleniti ea pariatur nihil laudantium aliquid, similique ut quas itaque ipsum nisi accusantium, architecto aperiam asperiores quia!</p>
        </div>
    </div>
    <div class="row justify-content-end align-items-end">
        <h3 class="border-bottom border-dark text-end"> Dedizione </h3>
        <div class="col-12  d-flex ">
            
            <p class="m-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis saepe repellendus aut, dolor molestias delectus perferendis ipsum excepturi, nulla vel eum accusantium optio, alias reprehenderit a placeat reiciendis modi esse? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum corrupti unde praesentium. Sequi est perspiciatis, necessitatibus et laborum veniam a reprehenderit nisi amet voluptas ullam repudiandae voluptates eius neque at. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet autem accusantium beatae. Doloribus cum sint quisquam tenetur repudiandae? Nulla repudiandae aliquid optio consequuntur tenetur quae ab possimus animi reprehenderit autem! Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, ad alias laboriosam harum unde aliquam fugiat natus rem sapiente tempore cum beatae id dolores totam dolorem libero. Nesciunt, quasi Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos libero dolorem reprehenderit fuga dignissimos. Tempore earum quaerat sint velit quas perspiciatis mollitia, error magnam, accusamus quasi iusto est odit quidem. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio atque at facilis modi! Deleniti ea pariatur nihil laudantium aliquid, similique ut quas itaque ipsum nisi accusantium, architecto aperiam asperiores quia! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam voluptatum enim exercitationem inventore, beatae facere eligendi perspiciatis blanditiis neque rem a accusantium placeat eaque reiciendis laboriosam in voluptas at sed. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum rerum nisi iusto, velit nam similique quisquam modi eaque dignissimos explicabo repudiandae molestias aut veniam maiores quae debitis sapiente eligendi excepturi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni nemo, nostrum, accusamus laborum quas error praesentium eius mollitia nulla quasi maiores necessitatibus fuga molestias vitae accusantium id, ipsum cum deserunt!</p>
            <img src="/media/dedizione.jpg" alt="" class="imgVertical ">
        </div>
    </div>
  </div>
 




    <script src="/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>