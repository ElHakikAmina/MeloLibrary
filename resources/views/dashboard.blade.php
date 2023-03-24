
<section class="mb-4">

<x-app-layout>
   
<div class="container">

    <!-- class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4" -->
    <main role="main">
        <div class="  text-center  text-white align-items-center mb-3 border-bottom">
           <h1>Tableau de bord</h1> 
        </div>
        <div class="text-center mt-2">
            <i class="fa-solid fa-music"></i>
            <a href=""><i class="fa-solid fa-people-group"></i></a>
            <i class="fa-solid fa-user"></i>
            <a href=""><i class="fa-solid fa-comment"></i></a>
            <i class="fa-solid fa-people-group"></i>
            <a href=""><i class="fa-solid fa-music"></i></a>
            
            
            <i class="fa-solid fa-music"></i>
            <a href=""><i class="fa-solid fa-comment"></i></a>
            <i class="fa-solid fa-user"></i>
            <a href=""><i class="fa-solid fa-user"></i></a>
            <i class="fa-solid fa-comment"></i>   
            <a href=""><i class="fa-solid fa-people-group"></i></a>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card bg-black text-white border border-secondary">
                    <div class="card-body" style="height: 180px;">
                        <h5 class="card-title">Les catégories</h5>
                        <p class="card-text" style="position: absolute;top: 90px;font-size:2rem">{{ count($categorie)}}</p>
                        <div class="user">
                            <a href="{{ route('categories.index') }}" style="position: absolute;top: 90px;right: 20px;font-size:2rem"><i class="fa-solid fa-user"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-black text-white border border-secondary">
                    <div class="card-body" style="height: 180px;">
                        <h5 class="card-title">Les musiques</h5>
                        <p class="card-text" style="position: absolute;top: 90px;font-size:2rem">{{ count($music)}}</p>
                        <div class="user">
                            <a href="{{ route('musics.index') }}" style="position: absolute;top: 90px;right: 20px;font-size:2rem"><i class="fa-solid fa-music"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-black text-white border border-secondary">
                    <div class="card-body" style="height: 180px;">
                        <h5 class="card-title">Les commentaires</h5>
                        <p class="card-text " style="position: absolute;top: 90px;font-size:2rem">{{ count($comments)}}</p>
                        <div class="user">
                            <a href="{{ route('comments.index') }}" style="position: absolute;top: 90px;right: 20px;font-size:2rem"><i class="fa-solid fa-comment"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-black text-white border border-secondary">
                    <div class="card-body" style="height: 180px;">
                        <h5 class="card-title ">Les artistes</h5>
                        <p class="card-text" style="position: absolute;top: 90px;font-size:2rem">{{ count($artistes)}}</p>
                        <div class="user">
                            <a href="{{ route('artistes.index') }}" style="position: absolute;top: 90px;right: 20px;font-size:2rem"><i class="fa-solid fa-user"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-black text-white border border-secondary">
                    <div class="card-body" style="height: 180px;">
                        <h5 class="card-title">Les bandes</h5>
                        <p class="card-text" style="position: absolute;top: 90px;font-size:2rem">{{ count($bandes)}}</p>
                        <div class="user">
                            <a href="{{ route('bandes.index') }}" style="position: absolute;top: 90px;right: 20px;font-size:2rem"><i class="fa-solid fa-people-group"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</div>

</x-app-layout>

</section>