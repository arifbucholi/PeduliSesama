<form action="{{ route('blogs.edit', $blog->id) }}" method="POST">
                            @method('PUT')
                            @csrf


                            <div class="col-md-6 offset-md-4 nav-link btn btn-success create-new-button">
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                    <a href="{{ route('blogs.index') }}" class="btn btn-secondary">
                                        Cancel
                                    </a>
                                </div>
