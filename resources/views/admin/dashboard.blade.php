@extends('layouts.zeis.app')
@section('content')
        <div class="col-md-12 mb-2">
            <div class="mt-3  d-flex align-items-center">
                <h5 class="fw-bold text-dark"  style="font-size: 36px;">Hello,{{ auth()->user()->name }}</h5>               
                <svg width="36" height="37" viewBox="0 0 36 37" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <path d="M0 36.52H36V0.52H0V36.52Z" fill="url(#pattern0)"/>
                    <defs>
                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                    <use xlink:href="#image0_59_616" transform="scale(0.015625)"/>
                    </pattern>
                    <image id="image0_59_616" width="64" height="64" xlink:href="data:image/png;base64,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"/>
                    </defs>
                </svg>    
            </div>
            <span class="" style="font-size: 20px;">Wellcome to Database </span>
        </div>
        <div class="text-end">
            <a href="{{ route('tambah-influencer') }}" class="btn btn-primary">
                Tambah Influencer
            </a>
        </div>

        <div class="row g-3 my-4">
            <div class="col-md-4 ">
                <div class="card" style="background: #FF8A00;">
                    <a href="{{ route('comunity')}}">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="">
                                    <img src="{{ asset('assets/images/icon/comunity.svg')}}" alt="">
                                    <div class="small text-center text-white" style="font-size: 12px;">COMMUNITY</div>
                                </div>
                                <div>
                                    <div class=" fw-bold text-white" style="font-size: 32px">{{ number_format($countComunity,0,',','.') }}</div>
                                    <div class="text-white text-center" style="font-size: 15px;">Database</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="card" style="background: #F87A8F;">
                    <a href="{{ route('tambah') }}">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="">
                                    <img src="{{ asset('assets/images/icon/insta.svg')}}" alt="">
                                    <div class="small text-center text-white" style="font-size: 12px;">INSTAGRAM</div>
                                </div>
                                <div>
                                    <div class=" fw-bold text-white" style="font-size: 32px">{{ number_format($allCount['instagram'],0,',','.') }}</div>
                                    <div class="text-white text-center" style="font-size: 15px;">Database</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="card" style="background: #1F73A6;">
                    <a href="{{ route('twitter') }}">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="">
                                    <img src="{{ asset('assets/images/icon/twitter.svg')}}" alt="">
                                    <div class="small text-center text-white" style="font-size: 12px;">TWITTER</div>
                                </div>
                                <div>
                                    <div class=" fw-bold text-white" style="font-size: 32px">{{ number_format($allCount['twitter'],0,',','.') }}</div>
                                    <div class="text-white text-center" style="font-size: 15px;">Database</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="row g-4 my-4">
            <div class="col-md-4 ">
                <div class="card" style="background: #A42D2D;">
                    <a href="{{ route('youtube')}}">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="">
                                    <img src="{{ asset('assets/images/icon/youtube.svg')}}" class="" alt="">
                                    <div class="small text-center text-white" style="font-size: 12px;">YOUTUBE</div>    
                                </div>
                                <div>
                                    <div class=" fw-bold text-white" style="font-size: 32px">{{ number_format($allCount['youtube'],0,',','.') }}</div>
                                    <div class="text-white text-center" style="font-size: 15px;">Database</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="card" style="background: #464646;">
                    <a href="{{ route('tiktok') }}">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="">
                                    <img src="{{ asset('assets/images/icon/tiktok.svg')}}" class="" alt="">
                                    <div class="small text-center text-white" style="font-size: 12px;">TIKTOK</div>
                                </div>
                                <div>
                                    <div class=" fw-bold text-white" style="font-size: 32px">{{ number_format($allCount['tiktok'],0,',','.') }}</div>
                                    <div class="text-white text-center" style="font-size: 15px;">Database</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="card" style="background: #8F00FF;">
                    <a href="{{ route('talent') }}">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="">
                                    <img src="{{ asset('assets/images/icon/talent.svg')}}" class="" alt="">
                                    <div class="text-white text-center" style="font-size: 12px;">Talent/MC</div>
                                </div>
                                <div>
                                    <div class=" fw-bold text-white" style="font-size: 32px">{{ number_format($countTalent,0,',','.') }}</div>
                                    <div class="text-white" style="font-size: 15px;">Database</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="card" style="background: #339b0a;">
                    <a href="{{ route('input-data-media') }}">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="">
                                    <img src="{{ asset('assets/images/icon/media.svg')}}" class="" alt="">
                                    <div class="text-white text-center" style="font-size: 12px;">Media</div>
                                </div>
                                <div>
                                    <div class=" fw-bold text-white" style="font-size: 32px">{{ number_format($countMedia,0,',','.') }}</div>
                                    <div class="text-white" style="font-size: 15px;">Database</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="">
                        <div class="mt-3 mb-3">
                            <span class="fw-bold" style="font-size: 20px;">ALL Influencer</span>
                        </div>
                    </div>
                    <div class="">
                        <div class=" table-responsive ">
                            <table id="example" class="table table-striped table-bordered " style="width:100%">
                                <thead>
                                    <tr class="">
                                        <th data-field="state" data-checkbox="checkbox" class="text-center" style="font-size: 12px;">select</th>
                                        <th data-field="id" class="text-center" style="font-size: 12px;">No</th>
                                        <th data-field="name" data-editable="true" class="text-center" style="font-size: 12px;">Name</th>
                                        <th data-field="complete" class="text-center" style="font-size: 12px;">Jenis Kelamin</th>
                                        <th data-field="task" data-editable="true" class="text-center" style="font-size: 12px;">Category</th>
                                        <th data-field="date" data-editable="true" class="text-center" style="font-size: 12px;">Tier</th>
                                        <th data-field="" data-editable="true" class="text-center" style="font-size: 12px;">Domisili</th>
                                        <th data-field="phone" data-editable="true" class="text-center" style="font-size: 12px;">Contact Person</th>
                                        <th data-field="action" class="text-center" style="font-size: 12px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach ($influencer as $item)
                                   <tr class="text-center">
                                       <td class=""><input type="checkbox" name="row1"  style="font-size: 12px;"></td>
                                       <td style="font-size: 12px;">{{ $loop->iteration }}</td>
                                       <td style="font-size: 12px;">{{ $item->name }}</td>
                                       <td style="font-size: 12px;">{{ $item->jenis_kelamin}}</td>
                                       <td style="font-size: 12px;">
                                        @foreach ($item->category_1 as $ctg)
                                        {{ $ctg->category_2->name }},
                                        @endforeach
                                        </td>
                                        <td style="font-size: 12px;">{{ $item->tier->name  }}</td>
                                        <td style="font-size: 12px;">{{ $item->domisili }}</td>
                                       <td style="font-size: 12px;">{{ $item->phone }}</td>
                                       <td class="d-flex align-items-center justify-content-center" style="font-size: 12px;">
                                            <a href="{{ route('edit-influencer',$item->id)}}">
                                                <i class="fa fa-edit text-success" style="font-size: 20px;"></i>
                                            </a>
                                            <a href="{{ route('delete-influencer',$item->id)}}" class="border-0 bg-transparent" onclick="return confirm('Are you sure ?')">
                                                <i class="fa fa-trash text-danger" style="font-size: 20px;"></i>
                                            </a>
                                       </td>
                                   </tr>
                                   @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                 </div>
             </div>
             <script>
                var option = {
                    lengthChange: false,
                    buttons: [ 'copy', 'excel', 'pdf', 'colvis' ],
                    lengthMenu: [
                        [5, 10, 15, 20, 25, 30, 40, 50, -1],
                        [5, 10, 15, 20, 25, 30, 40, 50, "All"]
                    ],
                }
                var table = $('#example').DataTable(option);
                console.log(table)
                var checkData = document.querySelectorAll('.checkData')
                table.buttons().container()
                    .appendTo( '#example_wrapper .col-sm-6:eq(0)' );
                var alldata = table.rows().data();
                function pilih(x){
                    var cariCheck = checkData[x.key].getAttribute('checked')
                    if(cariCheck){
                        checkData[x.key].removeAttribute('checked','checked')
                    }else{
                        checkData[x.key].setAttribute('checked','checked')
                    }
                    console.log(cariCheck)
                }
            </script>
@endsection