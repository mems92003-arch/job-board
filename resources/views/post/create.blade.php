<x-layout :title="$pageTitle"> 
    <h2>Create New Post</h2>
     <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Post</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: #ffffff;
            color: #111827;
            font-family: Arial, Helvetica, sans-serif;
        }

        .container {
            width: calc(100% - 364px);
            margin: 38px auto 0;
        }

        h1 {
            margin: 0;
            font-size: 20px;
            line-height: 28px;
            font-weight: 600;
        }

        .intro {
            margin: 12px 0 0;
            color: #4b5563;
            font-size: 17px;
            line-height: 25px;
        }

        form {
            margin-top: 60px;
        }

        .row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }

        .field {
            display: flex;
            flex-direction: column;
        }

        label {
            font-size: 16px;
            font-weight: 600;
            line-height: 24px;
            margin-bottom: 10px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            border: 1px solid #e5e7eb;
            border-radius: 6px;
            outline: none;
            background: #fff;
            font: inherit;
        }

        input[type="text"] {
            height: 45px;
            padding: 0 12px;
        }

        textarea {
            height: 105px;
            padding: 10px 12px;
            resize: vertical;
        }

        input[type="text"]:focus,
        textarea:focus {
            border-color: #6366f1;
            box-shadow: 0 0 0 1px #6366f1;
        }

        .content-field {
            margin-top: 44px;
        }

        .help-text {
            margin: 18px 0 0;
            color: #6b7280;
            font-size: 16px;
            line-height: 24px;
        }

        .checkbox-field {
            margin-top: 43px;
        }

        .checkbox-label {
            display: flex;
            align-items: center;
            gap: 15px;
            margin: 0;
            cursor: pointer;
        }

        .checkbox-label input {
            appearance: none;
            width: 20px;
            height: 20px;
            margin: 0;
            border-radius: 5px;
            border: 1px solid #d1d5db;
            cursor: pointer;
            position: relative;
        }

        .checkbox-label input:checked {
            background: #4f46e5;
            border-color: #4f46e5;
        }

        .checkbox-label input:checked::after {
            content: "";
            position: absolute;
            width: 5px;
            height: 9px;
            left: 6px;
            top: 3px;
            border: solid white;
            border-width: 0 2px 2px 0;
            transform: rotate(45deg);
        }

        .checkbox-label span {
            font-size: 16px;
            font-weight: 600;
        }

        .checkbox-field .help-text {
            margin: 7px 0 0 35px;
        }

        .actions {
            margin-top: 70px;
            padding-top: 26px;
            border-top: 1px solid #f3f4f6;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            gap: 30px;
        }

        button {
            border: 0;
            font-family: inherit;
            font-size: 16px;
            cursor: pointer;
        }

        .cancel {
            background: transparent;
            color: #111827;
            padding: 10px 0;
        }

        .save {
            background: #4f46e5;
            color: white;
            padding: 12px 17px;
            border-radius: 7px;
        }

        .save:hover {
            background: #4338ca;
        }

        @media (max-width: 800px) {
            .container {
                width: calc(100% - 40px);
            }

            .row {
                grid-template-columns: 1fr;
                gap: 25px;
            }

            form {
                margin-top: 40px;
            }

            .actions {
                margin-top: 50px;
            }
        }
    </style>
</head>

<body>

    <main class="container">

        <h1>Create New Post</h1>

        <p class="intro">
            Use this form to publish a new post to the blog.
        </p>
        
        
        <form method="POST" action="/blog">
            @csrf
            <div class="row">

                <div class="field">
                    <label for="title">Title</label>
                    @error('title')
                    <span class="text-red-500"> {{ $message }}</span>
                    @enderror
                    <input type="text"  value="{{ old('title') }}" id="title" name="title">
                </div>
                

            </div>

            <div class="field content-field">

                <label for="content">Content</label>
                @error('content')
                    <span class="text-red-500"> {{ $message }}</span>
                @enderror

                <textarea id="content" name="content">  {{ old('content') }} </textarea>
                
                <p class="help-text">
                    Write a few sentences about the article.
                </p>

            </div>
             

            <div class="checkbox-field">

                <label class="checkbox-label">
                    <input type="checkbox" checked>
                    <span>Is Published ?</span>
                </label>

                <p class="help-text">
                    Do you want it published or saved as draft.
                </p>

            </div>

            <div class="actions">

                <a href="/blog" class="cancel">
                    Cancel
                </a>

                <button type="submit" class="save">
                    Save
                </button>

            </div>

        </form>

    </main>

</body>
</html>   
</x-layout>