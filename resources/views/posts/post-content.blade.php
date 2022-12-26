<x-layout.base>
    <!-- navbar -->
    @include('components.layout._header')

    <!-- main content / form -->
    <main class="mt-14">
        <section>
            <div class="container w-full block mx-5 lg:flex lg:mx-auto lg:space-x-24">
                <img class=" aspect-[4/3] object-contain"
                    src="{{ $post->gambar == null ? 'https://fakeimg.pl/600x200/' : asset('storage/' . $post->gambar) }}"
                    alt="Sunset in the mountains" width="50%" class="mr-4 h-full" />
                <div class="w-full flex flex-col mt-3">
                    <div class="mb-5">
                        <h1 class="uppercase text-3xl font-semibold font-mono">{{ $post->nama_gunung }}</h1>
                        <h5>Alamat :{{ $post->alamat }}</h5>
                        <h5>Harga Simaksi :{{ $post->harga_simaksi }}</h5>
                    </div>
                    <p>
                        {!! $post->konten !!}
                    </p>
                </div>
            </div>
        </section>
    </main>

    <section id="listOfComment">
        @include('components._add-comment')

        @foreach ($post->comments as $comment)
            <x-post.post-comment :comment="$comment" />
        @endforeach
    </section>

    {{-- footer --}}
    @include('components.layout._footer')

    <script type="text/javascript">
        let currentUser = {{ auth()->id() }} ?? null

        function isCommentOwner(data){
            if(data['data']['user_id'] === currentUser){
                return `
                <div>
                    <form action="" method="post">
                        @csrf

                        <x-form.submit-button data-id="${data['data']['id']}" class="hapusKomen bg-red-500 text-white">Hapus</x-form.submit-button>
                    </form>
                </div>
                `
            }
        }
    
        $(document).ready(function() {
            $('#btnSub').click(function(e) {
                e.preventDefault()
                let kontenKomen = $('textarea#kontenKomen');

                if(kontenKomen.val() == ""){
                    if($('#err').length == 0){
                        kontenKomen.after('<p id="err" class="text-red-700">Tidak boleh kosong</p>')
                    }
                }
                
                if(kontenKomen.val() !== ""){
                    $.ajax({
                        type: "post",
                        url: "{{ route('post.comment.create', $post->nama_gunung) }}",
                        data: {
                            'body': kontenKomen.val(),
                            '_token': $('input[name=_token]').val()
                        },
                        dataType: "JSON",
                        success: function(data) {
    
                            if(data['success']){
                                $('#listOfComment').append(`
                                <div class="bg-gray-100 mx-10 my-10 w-1/2 p-3 rounded">
                                    <article class="flex space-x-4 justify-between">
                                        <div>
                                            <header class="mb-4">
                                                <h3 class="font-bold">${(data['data']['user_id'] === currentUser) ? 'Anda' : data['user']['username']}</h3>
                                                <p class="text-xs">
                                                    diposting
                                                    <time>${new Date(data['data']['created_at']).toLocaleDateString('en-gb',{day:"numeric",month:'long',year:'numeric'})}</time>
                                                </p>
                                            </header>
        
                                            <p>${data['data']['body']}</p>
    
                                            </div>
                                            ${isCommentOwner(data)}
        
                                    </article>
                                </div>
                                    `)
                            }
    
                            $('#kontenKomen').val('')
                        }
                    })
                }
            })

            $('.hapusKomen').click(function(e){
                e.preventDefault()
                $.ajax({
                    type: "delete",
                    url: "/posts/comments/"+$(this).data('id'),
                    data: {
                        'id': $(this).data('id'),
                        '_token': $('input[name=_token]').val()
                    },
                    success: function(data) {
                        console.log(data);

                        if(data['success']){

                        }
                    }
                })
            })
        })
        $(document).ajaxStop(function(){
            window.location.reload();
        });
    </script>
</x-layout.base>
