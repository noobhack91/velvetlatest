@extends('backend_layout.master')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <button id="start-camera">Start Camera</button>
            <video id="video" width="320" height="240" autoplay></video>
            <button id="click-photo">Click Photo</button>
            <canvas id="canvas" width="320" height="240"></canvas>
        </div>
    </section>
</div>
@endsection

@section('custom_js')
<script>


let camera_button = document.querySelector("#start-camera");
let video = document.querySelector("#video");
let click_button = document.querySelector("#click-photo");
let canvas = document.querySelector("#canvas");

camera_button.addEventListener('click', async function() {
   	let stream = await navigator.mediaDevices.getUserMedia({ video: true, audio: false });
	video.srcObject = stream;
});

click_button.addEventListener('click', function() {

   	canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
   	let image_data_url = canvas.toDataURL('image/jpeg');


   	// data url of the image
   	console.log(image_data_url);

   	// image_data_url="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/4gHYSUNDX1BST0ZJTEUAAQEAAAHIAAAAAAQwAABtbnRyUkdCIFhZWiAAAAAAAAAAAAAAAABhY3NwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAQAA9tYAAQAAAADTLQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAlkZXNjAAAA8AAAACRyWFlaAAABFAAAABRnWFlaAAABKAAAABRiWFlaAAABPAAAABR3dHB0AAABUAAAABRyVFJDAAABZAAAAChnVFJDAAABZAAAAChiVFJDAAABZAAAAChjcHJ0AAABjAAAADxtbHVjAAAAAAAAAAEAAAAMZW5VUwAAAAgAAAAcAHMAUgBHAEJYWVogAAAAAAAAb6IAADj1AAADkFhZWiAAAAAAAABimQAAt4UAABjaWFlaIAAAAAAAACSgAAAPhAAAts9YWVogAAAAAAAA9tYAAQAAAADTLXBhcmEAAAAAAAQAAAACZmYAAPKnAAANWQAAE9AAAApbAAAAAAAAAABtbHVjAAAAAAAAAAEAAAAMZW5VUwAAACAAAAAcAEcAbwBvAGcAbABlACAASQBuAGMALgAgADIAMAAxADb/2wBDAAMCAgICAgMCAgIDAwMDBAYEBAQEBAgGBgUGCQgKCgkICQkKDA8MCgsOCwkJDRENDg8QEBEQCgwSExIQEw8QEBD/2wBDAQMDAwQDBAgEBAgQCwkLEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBD/wAARCADwAUADASIAAhEBAxEB/8QAHQAAAQQDAQEAAAAAAAAAAAAABAMFBgcAAggBCf/EAFMQAAEDAgUBBAcDBwgFCgcBAAECAxEABAUGEiExQQcTUWEIFCIycYGRI6HBFUKx0eHi8AkXJDNSYoKiFmZypLIlNDVEU2NkkpTxNkNGVFaD0tP/xAAaAQADAQEBAQAAAAAAAAAAAAABAgMEAAUG/8QAOxEAAQQABAIHCAADCAMAAAAAAQACAxEEEiExQVEFEyIyYXGhFIGRscHR4fAzQlIGFRYjJHKS8USi4v/aAAwDAQACEQMRAD8A7za7IW1JCU43Ebz6r+/50ajscbCf+nkyf/Cc/wCepxbJCgIUY6eNOKGhpABnpM1kzO2WQYdp3Vc/zPIBj8uCPK0/fpZrskQ0oEY4IAiBac/56sQJgGOa2iiHGlQYVigbfZmloBX5ZH/pv3qXR2faEmcTmf8AuP3qmsfCvNPlFdncUvscfJRNvJISPavhuTt3H7aIYyggSfXQf/0/tqSlIrIgVxkeOKIwcXJMQyqhJlN0Jmf6v9tbpwUN+0Xh8dEEffTyN6SfColtoLMHYxHFKJ3803skXAJvbw5ox7Y5jZEdaLTYoSiNvpSikO6SltASSnZW3P8AEVG+z93Mj9libmZrhp15vF7xm2LaAkerIcKW5A/OgGaq2Tml9maNQE/CzSkAwI8ImtvVgQOh5AjrzRREiIFa6SDzHnTZgh1KGVbpTCQgCdth/HhWJtBG5iPKiVCa9AA55ps3JDqQgl2KDEbTv+ivU2jaVGUyTHSjI3AgQK843Ars1odXWyFXboIMN6fMUE1hqbdCva1BQEjQfMkj4kk/Enxp30yOBPnQd0kBIUUjUCCNuD9PGhsErmc9fcEwXVslvUrSSONtQkjw2phvLj1VSlJZBJA6x+FSK6UWyJbb1EdUpJP3VDswXqUa9bgCT1gD8PvpcxSCLMbcb96h+KguSFkrA2BP6Jio1e2CJIDQGoEyU/sobHe0vKdo4pDmNMKUkxCTrjy2FRM9qmBYriDGGYY87dXVy4GWWWmFrW44o6UpA07kkxRDXHgrBoaFYeQ+z8ZvzC3aPMkWbBD10sDhH9mY5VxzxJ6V0jhWHJtEqHchoJWsISOiQSEx4CIgdBApn7Ocppynl1izeSk3rwD12sR/WEe6D4J4HzPWpQ660w2p55xKG0AqUpRgADqabMYwWD3rmQNlIldw2W1N7oW7ehwNqCdITJSR1Pl5014pmzDLBy1Vdd6py5V/RbdtsqdWI3cKeQAJPw89gfb49hz96vD2cSt13SANduXAHUSJ3TyNiOR1osY5ptLiJWSDITol30fabcmoZmVCfW0OBKCGwSokc+2ryqavKC1STG1QrMDRVdpWvlJIA8ZUT4HrVMxoArDI0ZyWqqW3TKdSh8ulFoc1D2Z3mZ/RTKFlszJIHnxSV5ir1jYu3du0l/uW1L0AwVQJgeBrzivRLQVJW1JkEA7Hn9fnRTatQEx47DemLCb5/ELC3vnLZbBfaS4W1blMidNOzDioAkxtMAjx2rgbSltCinVh/TCCR47daPbc4jcc/CmhpRUkBSJ8PL4GiEOutuaFIUUEwlQI586ZDICnq3e31BMgAnYU7MvkqlJ2HgBTAwpalbACB1jYU5Wy3NPE+G9MAlytT8ypBASobjw/jxiiB3iNuRzJ4ptYWtHBkeO23hTkz3i0EBMz4mK4pwAj7ZHdKPsTMfKnNMQORtVYNdqyWB7WBAjzuv3KIHbBEg5cgBWn/nn7nnVDE4Jo5WjdWQCJmvZPhVbntiA/+nR/6z9ysHbJI/8AhzqR/wA8/coBh5KvXM5qyADXtVt/PH/q7/vn7le/zxdDlz/fP3KPVOXdfGOKsis+NVv/ADxf6u/75+5Wfzxf6u/73+5XGF54LhiIzx+aseN68joKrn+eL/V3/e/3K8/nh/1cH/q/3KQ4eTkm65nNWTWqW22wQhASCSTA5J5quf54R/8Ajn+9/uVn88P+rn+9/uURBJxC7rmc1Y+/SvCarhXbEAmTl6I/8Z+5UdzF6Stjl2yevrjK/eIYSVKCb/cx4Q2SaoIH7kKDsXCDlzfNXSN9qzT4mqQyF6SV/nXDE4y52eHDrN7UWFLxTvFrTOxKe5ETzyarPOHp/uZTzFiWAq7IvWfyfdrte+/L+jWAvSFafVjE8xJ+NOYZAdlzMRC/Y7eBXXmkcVmnwrmDsd9NpPavjWI4Kvs1GEO2NuLgH8tesFwawk7dwmIkbyeam2ZfSVssuXTVqvK4eUGy/cqOIBAt2Rwo/ZmSTsB133FcYJRWm6IxEBBN7eBV0aaHu0EpAiflNc0Z29OGyyHkH/TTGezd9d3iNwm0y/gzOJ6rvFnVbNhKe5+zCjvJBhPtdQDNsI9ITF3stWOKZr7P2MHxS4ZDlxh7WM+si3UR7nellGojgwmm6iWtR8lF+Kw4GjvQqbYw+4hKiG1yCOB125+VUr2iYndXpTg9kXfWrwlCdiITtqVv5bfE0Y/6TTmPYu5guDZG75LZKXbj8pgISrokDuvaMbncAbbztSGF4xb2manMw4thYvXlIAba77QGUbmAdJ1SRMwOR4UohcTSQ4yFgzErm7N2EGxxu+sShSPV7tbUDaAlRBq0vRA7O8IzJm3HMexQEvYLbNt2iY91b4cSXPilKCB/tk9BQWe8AZxfMWJY4h0Mi+vnLjuY1BrUrVp1A7xPMDximrsX7bF9keIYrdoyscUGKtsoKDfdx3ZQVkGe7VM6z4VVgczvb0icXDIKa7le676QkISEg8VBsz5otHFOKccJwuxcLakpEm+uRw0kdUg8+J23qi8V9M68xPD3bKzyAbFx4aC8MX1qSknfT9iIJHB6c1H7T0jWmcaZxW4yGh1vD2u7wy1ViRS1bL6uK+yPeK8OI3PMESY05rcnkxMeXIw6KzO0PP2JdnDbFhhVunF+1PO4UxhOHpAWLFn+2r+y2iQVHhSh4JmpN2Rdmll2RZafXieILxTMuKuKvsZxJ1ZUt+4VuqCeEjYDx5rnHs27ZbnJmP45nbN+BuZozTjz61KxR2/7lu0t+EW7DPdr7pCQB+dJ61L8e9Je9x5gsoyv6mh06XNGIalKRJkA92NJ35/YQ5zV2d1mMjDTQdF0vgOLW+MWztyy8HUofU1qB2kDcUz5hATcNqDZJ1kAgiapTAPSWtsEw9vD7TIstI3A/KYA68DuduaVv/SMTiukt5RDPtlU+v6vl/VihRoFQsA6JBD2kiepgeM0tstBQeF7KExI46VDG85JASU4fsdj9r+yjGc3Jcgeo7R0en8Ky9S88F6HXxHiplZqbbbQ22nSloBIT4AAD8KPZcmVJJ2/GoPZ4+EhUWjTWoQCz7BB8eoNOltet3ZG2nymTUo2TOeQ9lN0rUX4ggbV4E2DzsIPnY3um/RTBlY39rVMzRra0qAbVBBqONiWwNeqOsVvWhsD+K7rg7YKWtPFmA4slsbBR3IA6U5W7oI96Zj6VAKyrCAjigXa7K07VZgFJ4iQKdLZ6SBB23+FUxWV3UeK4vobJN8q0kJMRVeZLwztTsc24xdZuzdhuIYJKkWNqzalDiCSFJUpXkklPWT4RU/N9b6dYWCPGkFXjAcVpSBKQVGOTvTOfySiMFLNkqk7nniKU1JBMq9roD8/1Uim8QQYWAYnmm69xdDa0kk8xz5EAVHOb0VC3S06m4TuBJ2NeIdPJSRMn9PnUXxfN+HYNbOX2I3AbbSgn3hJ8gOvkKqPNfpLYXglw6wlJccSkCG9ygn+0SQBwT8KswF2yi6guiFXDSB9qtKABMqUAOa9Q+w4vu2321rCdWkKBMeMVwZ2gelfi+M3Bt23nLezYUrSwy7CXVcArVIJ56bfpENZ9ILMyShm2ulj2itRDivZSY438B+jitsUJk3KzveWG2hfSgkASTAHJrAUqAKVAg7giuAcX9KXOeNsIwpeIvJtmVBJaSow4N51qmV7gbcbxFOlr6UeZbK/XdDFlNNbJKFLUQRxO552PPjVfZDzSHFuH8q7qrVbjbf9Y4lMCdzXEeH+l7jVviCH2sUeuLcJ0gPL1hRiJInnrvVm4P6ReH5pdTai8KStGpKwqBt8FdTSPw5ZqVwxZfoBS";

   	 $.ajax({
      type:"POST",
      url:"{{ url('/model/selfie') }}",
      data:{image_data_url : image_data_url},
      dataType: 'json',
       headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
      success: function(result){
        if(result.status=='true' && result.code==200)
        {
          toastr.error(result.message);
        window.setTimeout(function() {
            location.reload(true);

      }, 1000);
        }
        if(result.status=='false' && result.code==400)
        {
          toastr.error(result.message);

        }
      }

  });
});

</script>
@endsection
