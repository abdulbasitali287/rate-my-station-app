@props([
        'logoImgPath' => 'user/assets/img/7-abc.png',
        'title' => 'Assistant News Director',
        'subHeading' => 'KABC',
        'iconOne' => 'user/assets/vectors/map-icon-30x30.png',
        'textOne' => 'Los Angeles, CA',
        'textTwo' => '$100,000  -  $130,000',
        'textThree' => 'Full time'
        ])
<div class="col-md-6">
    <div class="bg-white px-5 py-4 my-4" style="border-radius: 10px;box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);">
        <div class="d-flex justify-content-between">
            <div style="width: 85px;height: 82px;"><img src="{{ asset($logoImgPath) }}" class="w-100 h-100" alt=""></div>
            <div class="d-flex flex-column py-3 flex-grow-1 ps-3">
                <h6 class="m-0" style="font-size: 24px;font-weight: bold;">{{ $title }}</h6>
                <p style="color: #828282;">{{ $subHeading }}</p>
            </div>
            <div>
                <button class="btn btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{ asset('user/assets/img/three-dots.png') }}" alt="">
                </button>
                <div class="dropdown-menu">

                </div>
            </div>
        </div>
        <div class="d-flex justify-content-around px-2 my-3" style="background-color: #F2F2F2;border-radius: 10px;padding-block: 10px;">
            <div class="pe-4">
                <span><img src="{{ asset($iconOne) }}" style="width: 17px;" alt=""></span>
                <span style="color: #194D79;font-size: 14px;">{{ $textOne }}</span>
            </div>
            <div class="pe-4">
                <span><img src="{{ asset('user/assets/vectors/dollar-50.png') }}" style="width: 28px;" alt=""></span>
                <span style="color: #194D79;font-size: 14px;">{{ $textTwo }}</span>
            </div>
            <div class="pe-4">
                <span><img src="{{ asset('user/assets/vectors/briefcase-30.png') }}" style="width: 20px;" alt=""></span>
                <span style="color: #194D79;font-size: 14px;">{{ $textThree }}</span>
            </div>

        </div>
        <div>
            <ul style="padding-inline-start: 20px;">
                <li style="list-style: circle;padding-bottom: 10px;"><p style="font-weight: 300;line-height: 25px;">Massa fringilla quam pretium adipiscing in non tellus. Turpis quis turpis sit euismod lobortis sapien rhoncus condimentum dolor.</p></li>
                <li style="list-style: circle;padding-bottom: 10px;"><p style="font-weight: 300;line-height: 25px;">Massa fringilla quam pretium adipiscing in non tellus. </p></li>
                <li style="list-style: circle;padding-bottom: 10px;"><p style="font-weight: 300;line-height: 25px;">Massa fringilla quam pretium.</p></li>
            </ul>
        </div>
        <div class="d-flex justify-content-between align-items-center pt-3">
            <div>
                <a href="{{ url('job-details') }}" class="d-inline-block" style="background-color: #9BDB08;border: none;color: #ffff;padding-top: 6px;padding-bottom: 8px;padding-inline: 14px;border-radius: 8px;"><span style="display: inline-block;padding-inline-end: 6px;"><img src="{{ asset('user/assets/vectors/tick-vector.png') }}" alt=""></span><span style="display: inline-block;padding-top: 1px;font-weight: 300;">Actively Hiring</span></a>
            </div>
            <div>
                <p style="color: #828282;"><span style="display: inline-block;padding-inline-end: 6px;"><img src="{{ asset('user/assets/vectors/timer-vector.png') }}" alt=""></span><span style="font-size: 12px;">Updated 8 hours ago</span></p>
            </div>
        </div>
    </div>
</div>
