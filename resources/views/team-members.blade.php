@foreach($teamMembers as $teamMember)
    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
        <div class="member" data-aos="fade-up">
            <div class="member-img">
                <img src="{{ asset('uploads/' .$teamMember->image) }}" class="img-fluid" alt="{{ $teamMember->name }}">
                <div class="social">
                    <a href="#"><i class="bi bi-twitter"></i></a>
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
            <div class="member-info">
                <h4>{{ $teamMember->name }}</h4>
                <span>{{ $teamMember->position }}</span>
            </div>
        </div>
    </div>
@endforeach
