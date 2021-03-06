@extends('dashboard.template.index')


@section('content')

<style>
#fof{
    display:block; width:100%; margin:50px 0; line-height:1.6em; text-align:center;
}
#fof .hgroup{
    text-transform:uppercase;
}
#fof .hgroup h1{
    margin-bottom:25px; font-size:80px;
}
#fof .hgroup h1 span{
    display:inline-block; margin-left:5px; padding:2px; border:1px solid #CCCCCC; overflow:hidden;
}
#fof .hgroup h1 span strong{
    display:inline-block; padding:0 20px 20px; border:1px solid #CCCCCC; font-weight:normal;
}
#fof .hgroup h2{
    font-size:60px;
}
#fof .hgroup h2 span{
    display:block; font-size:30px;
}
#fof p{
    margin:25px 0 0 0; padding:0; font-size:16px;
}
#fof p:first-child{
    margin-top:0;
}
</style>
     
        <div class="card-body px-0 pb-2 text-center">
           
            <section id="fof" class="clear">
                <div class="hgroup">
                  <h1><span><strong>4</strong></span><span><strong>0</strong></span><span><strong>4</strong></span></h1>
                  <h2>Error ! <span>Page Not Found</span></h2>
                </div>
                <p>For Some Reason The Page You Requested Could Not Be Found On Our Server</p>
            </section>
           
        </div>
@endsection
