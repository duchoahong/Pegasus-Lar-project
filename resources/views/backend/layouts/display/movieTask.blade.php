<section class="au-breadcrumb m-t-75">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="au-breadcrumb-content">
                        <div class="au-breadcrumb-left">
                            <span class="au-breadcrumb-span">You are here:</span>
                            <ul class="list-unstyled list-inline au-breadcrumb__list">
                                <li class="list-inline-item active">
                                    <a href="#">Home</a>
                                </li>
                                <li class="list-inline-item seprate">
                                    <span>/</span>
                                </li>
                                <li class="list-inline-item">Dashboard</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <button onclick="window.location.href='{{route('movieEdit', ['id' => $movie->id])}}'" class="btn btn-success">
                        <i class="zmdi zmdi-plus"></i>Edit</button>
                    <button onclick="window.location.href='{{route('directorAdd')}}'" class="btn btn-danger">
                        <i class="zmdi zmdi-plus"></i>Delete</button>
                </div>
            </div>
        </div>
    </div>
</section>