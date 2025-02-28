<div>
    <!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
    <h1>Home Page</h1>
    <!-- get current url -->
    <!-- <h3>{{URL::current()}}</h3>
    <h3>{{URL::full()}}</h3> -->

    <h3>{{URL::current()}}</h3>
    <h3>{{URL::full()}}</h3>
</div>

<a href="{{URL::to('about')}}">About Page</a>
<!-- child path -->
<a href="{{URL::to('about',['Peter'])}}">About Peter</a>
