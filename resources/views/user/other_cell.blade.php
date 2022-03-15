@extends('user.layouts.layout')
@section('content')
    <section class="tup">
        <div class="brid">
            <div class="container">
                <h1>
                    Other Cell<br>
                    <span><a href="{{ route('index') }}">Home </a>/ Other Cell</span>
                </h1>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    Section 1
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                            aria-labelledby="headingOne">
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum id
                                    pellentesque at, vestibulum ut arcu. Curabitur erat libero, egestas eu tincidunt ac,
                                    rutrum ac justo. Vivamus condimentum laoreet lectus, blandit posuere tortor aliquam
                                    vitae. Curabitur molestie eros. </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Section 2
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum id
                                    pellentesque at, vestibulum ut arcu. Curabitur erat libero, egestas eu tincidunt ac,
                                    rutrum ac justo. Vivamus condimentum laoreet lectus, blandit posuere tortor aliquam
                                    vitae. Curabitur molestie eros. </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Section 3
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingThree">
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum id
                                    pellentesque at, vestibulum ut arcu. Curabitur erat libero, egestas eu tincidunt ac,
                                    rutrum ac justo. Vivamus condimentum laoreet lectus, blandit posuere tortor aliquam
                                    vitae. Curabitur molestie eros. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
