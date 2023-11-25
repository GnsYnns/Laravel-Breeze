<link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet">

<style>
    body {
        font-family: 'Asap', sans-serif;
    }

    img {
        max-width: 100%;
    }

    .avator {
        border-radius: 100px;
        width: 48px;
        margin-right: 15px;
    }


    .tweet-wrap {
        max-width: 490px;
        background: #fff;
        margin: 0 auto;
        margin-top: 50px;
        border-radius: 3px;
        padding: 30px;
        border-bottom: 1px solid #e6ecf0;
        border-top: 1px solid #e6ecf0;
    }

    .tweet-header {
        display: flex;
        align-items: flex-start;
        font-size: 14px;
    }

    .tweet-header-info {
        font-weight: bold;
    }

    .tweet-header-info span {
        color: #000000;
        font-weight: normal;
        margin-left: 5px;
    }

    .tweet-header-info p {
        font-weight: normal;
        margin-top: 5px;

    }

    .tweet-img-wrap {
        padding-left: 60px;
    }

    .tweet-info-counts {
        display: flex;
        margin-left: 60px;
        margin-top: 10px;
    }

    .tweet-info-counts div {
        display: flex;
        margin-right: 20px;
    }

    .tweet-info-counts div svg {
        margin-right: 10px;
    }

    @media screen and (max-width:430px) {
        body {
            padding-left: 20px;
            padding-right: 20px;
        }

        .tweet-header {
            flex-direction: column;
        }

        .tweet-header img {
            margin-bottom: 20px;
        }

        .tweet-header-info p {
            margin-bottom: 30px;
        }

        .tweet-img-wrap {
            padding-left: 0;
        }

        .tweet-info-counts {
            display: flex;
            margin-left: 0;
        }

        .tweet-info-counts div {
            margin-right: 10px;
        }
    }
</style>
<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg ml-20">
    <div class="p-6 text-gray-900 dark:text-gray-100">
        <div class="tweet-header">
            <img src="https://soccerpointeclaire.com/wp-content/uploads/2021/06/default-profile-pic-e1513291410505.jpg"
                alt="" class="avator">
            <div class="tweet-header-info">
                {{$name}} - écrit le {{$date}}
                <p>{{$text}}</p>

            </div>

        </div>
        <div class="tweet-info-counts">

            <div class="likes">
                <svg class="hover:fill-black dark:hover:fill-white feather feather-heart sc-dnqmqq jxshSx" xmlns="http://www.w3.org/2000/svg" width="20"
                    height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path
                        d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                    </path>
                </svg>
                <div class="likes-count">
                    {{$like}}
                </div>
            </div>

            <div class="message">
                <svg class="hover:fill-black dark:hover:fill-white feather feather-send sc-dnqmqq jxshSx" xmlns="http://www.w3.org/2000/svg" width="20"
                    height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <line x1="22" y1="2" x2="11" y2="13"></line>
                    <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                </svg>
            </div>
        </div>
    </div>
</div>