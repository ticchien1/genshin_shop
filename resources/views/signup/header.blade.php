<!DOCTYPE html>
<html lang="vi">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <meta name="description" content="">
    <meta name="keywords" content="" />


    <meta name="csrf-token" content="NT78Mm7qRYdPPSvBDpD4b8huEHK4dAYAAO0P7Q58">

    <link rel="stylesheet" href="style/plugins/fontawesome-free/css/all.min.css">
    <link rel="icon" type="image/png" href="">
    {{-- <link rel="canonical" href="https://shopgenshin.com/auth/register" /> --}}

    <link rel="stylesheet" href="style/dist/css/adminlte.min.css">
    <style>
        body {
            background: #fff url(https://shopgenshin.com/style/genshi/img/background/light-bg-genshin.webp) no-repeat fixed;
            background-size: cover;
        }

        a:hover {
            text-shadow: 0 0 10px #69e0ff, 0 0 20px #69e0ff, 0 0 40px #69e0ff;
            color: #fff;
        }

        @media (min-width: 1400px) {

            .container,
            .container-lg,
            .container-md,
            .container-sm,
            .container-xl,
            .container-xxl {
                max-width: 1390px;
            }
        }

        .link-active {
            text-shadow: 0 0 10px #69e0ff, 0 0 20px #69e0ff, 0 0 40px #69e0ff;
        }

        .fs-4 {
            font-size: 1.5rem !important;
        }

        .nav-header {
            background-color: rgb(0 0 0 / 27%);
        }

        #nav-user {
            color: #ffeaaa;
        }

        .nav-tabs .nav-item.show .nav-link,
        .nav-tabs .nav-link.active {
            color: #ffeaaa;
            font-weight: bold;
            background-color: unset;
        }

        .nav-tabs .nav-link {
            border: unset;
        }

        .main-header {
            position: sticky;
            top: 0;
            box-shadow: 3px 3px 8px rgb(0 0 0 / 23%), -5px -5px 8px #fdfcfc;
            font-size: 17px;
        }

        .menu-header {
            color: #e9ebf1;
            font-weight: bold;
        }

        .card {
            background-color: rgb(255 255 255 / 86%);
        }

        .shine-active {
            text-shadow: 0 0 10px #69e0ff, 0 0 20px #69e0ff, 0 0 40px #69e0ff;
            color: #fff;
            font-weight: bold;
            font-size: 17px;
        }

        .btn-pretty {
            border: none;
            background: url('style/genshi/img/btn_pretty.webp') no-repeat top left;
            color: #e4defe;
            font-weight: bold;
            font-size: 19px;
            height: 52px;
            width: 191px;
            margin: 3px 0 3px 0;
        }

        .btn-pretty:hover {
            text-shadow: 0 0 10px #69e0ff, 0 0 20px #69e0ff, 0 0 40px #69e0ff;
        }

        .note__title {
            width: 100%;
            line-height: 34px;
            font-size: 24px;
            font-weight: 700;
            padding-top: 14px;
            padding-bottom: 20px;
            text-align: center;
            background-image: url(data:image/png;base64,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UmVhZHlxyWU8AAADIWlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxNDIgNzkuMTYwOTI0LCAyMDE3LzA3LzEzLTAxOjA2OjM5ICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ0MgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjA2ODQ3MEQwRjlGNTExRTk4RjM3RjZDMDIwNTRDREFBIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjA2ODQ3MEQxRjlGNTExRTk4RjM3RjZDMDIwNTRDREFBIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MDY4NDcwQ0VGOUY1MTFFOThGMzdGNkMwMjA1NENEQUEiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MDY4NDcwQ0ZGOUY1MTFFOThGMzdGNkMwMjA1NENEQUEiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz5r6MWbAAAI+klEQVR42uxdaXITRxTuGVmSZeN9xQbCloSEIlWpyjHCEThJ+MlJwhG4QA6QH6kslUASdsziBRvJ8qLRTKbL30Ofmx5pRpYNhPdV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);
            background-position: center bottom;
            background-repeat: no-repeat;
            background-size: 97% auto;
            margin-bottom: 0;
        }

        .product-code {
            z-index: 1;
            position: absolute;
            padding: 7px 9px 7px 32px;
            top: 151px;
            left: 19px;
            font-weight: 700;
            background: #cca574 url(data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMqaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzE0MiA3OS4xNjA5MjQsIDIwMTcvMDcvMTMtMDE6MDY6MzkgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NENFQzIzMDNCMkJBMTFFOUIxNjhFNDEwOUE1RkEzRkYiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NENFQzIzMDRCMkJBMTFFOUIxNjhFNDEwOUE1RkEzRkYiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo0Q0VDMjMwMUIyQkExMUU5QjE2OEU0MTA5QTVGQTNGRiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo0Q0VDMjMwMkIyQkExMUU5QjE2OEU0MTA5QTVGQTNGRiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pv/uAA5BZG9iZQBkwAAAAAH/2wCEAAYEBAQFBAYFBQYJBgUGCQsIBgYICwwKCgsKCgwQDAwMDAwMEAwODxAPDgwTExQUExMcGxsbHB8fHx8fHx8fHx8BBwcHDQwNGBAQGBoVERUaHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fH//AABEIADYANgMBEQACEQEDEQH/xAB6AAEAAwEBAAAAAAAAAAAAAAAAAwQFBgIBAQADAQEAAAAAAAAAAAAAAAABAgMEBRAAAQMDAwMDBAMAAAAAAAAAAQACAxEEBSExEhMUBkGRImFxMkKxUqIRAQACAgEDAwUAAAAAAAAAAAABAhEDEiExQbHRMvChQrIE/9oADAMBAAIRAxEAPwDZyWSybMnJbW0hpVoYwNaTUtB9QvBrWMZl69rTls2Ud2yEd1L1JjqaAAD6CgCznHheMp1VIgICAggjsoWXct1Ss0lBU+gAAoPZWz0wjHVOqpEBAQEBAQEGNmMzctuW4nEtbLlpW8nOdrHbRnTqy0/y3dy3164xyt8fVjs2TnjX5eilYZK7w8sVrk7vv8bcu42eYPHSQmhinLfiKu/B23oVpekX61jFo7x7KVvNOlpzE+fd0y5HSICAg8yte6J7Y39ORzSGSU5cSRoaHeimES4TsMicNkPHYZuy8ll5TSXbjXv2V1eyQ6io+JH6fZehzryi89afr9fdxcZ4zTtf1UPEMbkMB49cxeQNdNBkHGGywJAfJJIdDQfry9gPkVp/Reuy8cPHeymik0pPPz+LuPGrHI2OHhtshN1p21IFeXTYT8YuZ1fwGnI7rg33ra2auzVWa1xLUWLUQEBBQzGHtspbtjkc6KeJ3UtbqPSSGQbPYf5GxC117JpLPZri0KuGwVxDcOyWWnbe5Zzem2ZreMcUf9ImH8eW7juSrbNsTHGsYqrr1zE5t1s2Vg2EBAQEBAQEBAQEBAQEBAQEH//Z) no-repeat;
            background-size: 40px;
        }

        .genshin-product .img-banner {
            width: 95.3%;
            margin: auto;
            padding: 0;
            content: " ";
            height: 175px;
            background-size: cover;
            background-repeat: no-repeat;
            color: #f0f0f0;
            border-radius: 6px;
        }

        .wrapper.product-wrapper {
            padding-top: 9px;
            margin-right: 3px;
        }

        .search-frm {
            position: sticky;
            top: 80px;
            background-image: url(style/genshi/img/bg-acc-of-list.webp);
            background-position: center;
            background-size: 100% 100% !important;
        }

        .genshin-product .product-wrapper {
            margin-bottom: 20px;
            position: relative;
            color: #634827;
        }

        .genshin-product .product-id {
            z-index: 10;
            background: #c14d43;
            position: absolute;
            padding: 2px 5px;
            font-weight: 700;
            top: 10px;
        }

        .genshin-product {
            background-image: url(style/genshi/img/bg-acc-of-list.webp);
            background-position: center;
            background-size: 100% 100% !important;
            text-align: center;
            padding-left: 7px;
            height: 100%;
        }

        .genshin-product-footer {
            padding-bottom: 33px;
        }

        .hr-product {
            margin-left: 6px;
            margin-right: 6px;
            padding-bottom: 6px;
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAl0AAAAOCAYAAAAVB6lbAAAKQ2lDQ1BJQ0MgcHJvZmlsZQAAeNqdU3dYk/cWPt/3ZQ9WQtjwsZdsgQAiI6wIyBBZohCSAGGEEBJAxYWIClYUFRGcSFXEgtUKSJ2I4qAouGdBiohai1VcOO4f3Ke1fXrv7e371/u855zn/M55zw+AERImkeaiagA5UoU8Otgfj09IxMm9gAIVSOAEIBDmy8JnBcUAAPADeXh+dLA//AGvbwACAHDVLiQSx+H/g7pQJlcAIJEA4CIS5wsBkFIAyC5UyBQAyBgAsFOzZAoAlAAAbHl8QiIAqg0A7PRJPgUA2KmT3BcA2KIcqQgAjQEAmShHJAJAuwBgVYFSLALAwgCgrEAiLgTArgGAWbYyRwKAvQUAdo5YkA9AYACAmUIszAAgOAIAQx4TzQMgTAOgMNK/4KlfcIW4SAEAwMuVzZdL0jMUuJXQGnfy8ODiIeLCbLFCYRcpEGYJ5CKcl5sjE0jnA0zODAAAGvnRwf44P5Dn5uTh5mbnbO/0xaL+a/BvIj4h8d/+vIwCBAAQTs/v2l/l5dYDcMcBsHW/a6lbANpWAGjf+V0z2wmgWgrQevmLeTj8QB6eoVDIPB0cCgsL7SViob0w44s+/zPhb+CLfvb8QB7+23rwAHGaQJmtwKOD/XFhbnauUo7nywRCMW735yP+x4V//Y4p0eI0sVwsFYrxWIm4UCJNx3m5UpFEIcmV4hLpfzLxH5b9CZN3DQCshk/ATrYHtctswH7uAQKLDljSdgBAfvMtjBoLkQAQZzQyefcAAJO/+Y9AKwEAzZek4wAAvOgYXKiUF0zGCAAARKCBKrBBBwzBFKzADpzBHbzAFwJhBkRADCTAPBBCBuSAHAqhGJZBGVTAOtgEtbADGqARmuEQtMExOA3n4BJcgetwFwZgGJ7CGLyGCQRByAgTYSE6iBFijtgizggXmY4EImFINJKApCDpiBRRIsXIcqQCqUJqkV1II/ItchQ5jVxA+pDbyCAyivyKvEcxlIGyUQPUAnVAuagfGorGoHPRdDQPXYCWomvRGrQePYC2oqfRS+h1dAB9io5jgNExDmaM2WFcjIdFYIlYGibHFmPlWDVWjzVjHVg3dhUbwJ5h7wgkAouAE+wIXoQQwmyCkJBHWExYQ6gl7CO0EroIVwmDhDHCJyKTqE+0JXoS+cR4YjqxkFhGrCbuIR4hniVeJw4TX5NIJA7JkuROCiElkDJJC0lrSNtILaRTpD7SEGmcTCbrkG3J3uQIsoCsIJeRt5APkE+S+8nD5LcUOsWI4kwJoiRSpJQSSjVlP+UEpZ8yQpmgqlHNqZ7UCKqIOp9aSW2gdlAvU4epEzR1miXNmxZDy6Qto9XQmmlnafdoL+l0ugndgx5Fl9CX0mvoB+nn6YP0dwwNhg2Dx0hiKBlrGXsZpxi3GS+ZTKYF05eZyFQw1zIbmWeYD5hvVVgq9ip8FZHKEpU6lVaVfpXnqlRVc1U/1XmqC1SrVQ+rXlZ9pkZVs1DjqQnUFqvVqR1Vu6k2rs5Sd1KPUM9RX6O+X/2C+mMNsoaFRqCGSKNUY7fGGY0hFsYyZfFYQtZyVgPrLGuYTWJbsvnsTHYF+xt2L3tMU0NzqmasZpFmneZxzQEOxrHg8DnZnErOIc4NznstAy0/LbHWaq1mrX6tN9p62r7aYu1y7Rbt69rvdXCdQJ0snfU6bTr3dQm6NrpRuoW623XP6j7TY+t56Qn1yvUO6d3RR/Vt9KP1F+rv1u/RHzcwNAg2kBlsMThj8MyQY+hrmGm40fCE4agRy2i6kcRoo9FJoye4Ju6HZ+M1eBc+ZqxvHGKsNN5l3Gs8YWJpMtukxKTF5L4pzZRrmma60bTTdMzMyCzcrNisyeyOOdWca55hvtm82/yNhaVFnMVKizaLx5balnzLBZZNlvesmFY+VnlW9VbXrEnWXOss623WV2xQG1ebDJs6m8u2qK2brcR2m23fFOIUjynSKfVTbtox7PzsCuya7AbtOfZh9iX2bfbPHcwcEh3WO3Q7fHJ0dcx2bHC866ThNMOpxKnD6VdnG2ehc53zNRemS5DLEpd2lxdTbaeKp26fesuV5RruutK10/Wjm7ub3K3ZbdTdzD3Ffav7TS6bG8ldwz3vQfTw91jicczjnaebp8LzkOcvXnZeWV77vR5Ps5wmntYwbcjbxFvgvct7YDo+PWX6zukDPsY+Ap96n4e+pr4i3z2+I37Wfpl+B/ye+zv6y/2P+L/hefIW8U4FYAHBAeUBvYEagbMDawMfBJkEpQc1BY0FuwYvDD4VQgwJDVkfcpNvwBfyG/ljM9xnLJrRFcoInRVaG/owzCZMHtYRjobPCN8Qfm+m+UzpzLYIiOBHbIi4H2kZmRf5fRQpKjKqLupRtFN0cXT3LNas5Fn7Z72O8Y+pjLk722q2cnZnrGpsUmxj7Ju4gLiquIF4h/hF8ZcSdBMkCe2J5MTYxD2J43MC52yaM5zkmlSWdGOu5dyiuRfm6c7Lnnc8WTVZkHw4hZgSl7I/5YMgQlAvGE/lp25NHRPyhJuFT0W+oo2iUbG3uEo8kuadVpX2ON07fUP6aIZPRnXGMwlPUit5kRmSuSPzTVZE1t6sz9lx2S05lJyUnKNSDWmWtCvXMLcot09mKyuTDeR55m3KG5OHyvfkI/lz89sVbIVM0aO0Uq5QDhZML6greFsYW3i4SL1IWtQz32b+6vkjC4IWfL2QsFC4sLPYuHhZ8eAiv0W7FiOLUxd3LjFdUrpkeGnw0n3LaMuylv1Q4lhSVfJqedzyjlKD0qWlQyuCVzSVqZTJy26u9Fq5YxVhlWRV72qX1VtWfyoXlV+scKyorviwRrjm4ldOX9V89Xlt2treSrfK7etI66Trbqz3Wb+vSr1qQdXQhvANrRvxjeUbX21K3nShemr1js20zcrNAzVhNe1bzLas2/KhNqP2ep1/XctW/a2rt77ZJtrWv913e/MOgx0VO97vlOy8tSt4V2u9RX31btLugt2PGmIbur/mft24R3dPxZ6Pe6V7B/ZF7+tqdG9s3K+/v7IJbVI2jR5IOnDlm4Bv2pvtmne1cFoqDsJB5cEn36Z8e+NQ6KHOw9zDzd+Zf7f1COtIeSvSOr91rC2jbaA9ob3v6IyjnR1eHUe+t/9+7zHjY3XHNY9XnqCdKD3x+eSCk+OnZKeenU4/PdSZ3Hn3TPyZa11RXb1nQ8+ePxd07ky3X/fJ897nj13wvHD0Ivdi2yW3S609rj1HfnD94UivW2/rZffL7Vc8rnT0Tes70e/Tf/pqwNVz1/jXLl2feb3vxuwbt24m3Ry4Jbr1+Hb27Rd3Cu5M3F16j3iv/L7a/eoH+g/qf7T+sWXAbeD4YMBgz8NZD+8OCYee/pT/04fh0kfMR9UjRiONj50fHxsNGr3yZM6T4aeypxPPyn5W/3nrc6vn3/3i+0vPWPzY8Av5i8+/rnmp83Lvq6mvOscjxx+8znk98ab8rc7bfe+477rfx70fmSj8QP5Q89H6Y8en0E/3Pud8/vwv94Tz+4A5JREAAAAZdEVYdFNvZnR3YXJlAEFkb2JlIEltYWdlUmVhZHlxyWU8AAADIWlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxNDIgNzkuMTYwOTI0LCAyMDE3LzA3LzEzLTAxOjA2OjM5ICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ0MgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjA2ODQ3MEQwRjlGNTExRTk4RjM3RjZDMDIwNTRDREFBIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjA2ODQ3MEQxRjlGNTExRTk4RjM3RjZDMDIwNTRDREFBIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MDY4NDcwQ0VGOUY1MTFFOThGMzdGNkMwMjA1NENEQUEiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MDY4NDcwQ0ZGOUY1MTFFOThGMzdGNkMwMjA1NENEQUEiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz5r6MWbAAAI+klEQVR42uxdaXITRxTuGVmSZeN9xQbCloSEIlWpyjHCEThJ+MlJwhG4QA6QH6kslUASdsziBRvJ8qLRTKbL30Ofmx5pRpYNhPdV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);
            background-position: center bottom;
            background-repeat: no-repeat;
            background-size: 100% auto;
        }

        .info-line {
            padding-right: 15px;
            padding-left: 15px;
        }

        .info-line section {
            padding: 7px 0;
            line-height: 17px;
            font-weight: 700;
            margin: auto;
        }

        .info-line section label {
            text-transform: uppercase;
            font-weight: 600;
            width: 100%;
            font-size: .8em;
            display: inline-block;
        }

        .info-line section .more-detail {
            font-size: .8em;
            margin: auto;
        }

        .info-line .hero-details .hero-icon {
            width: 30px;
            height: 30px;
            background-size: cover;
            background-position: center center;
            content: " ";
            cursor: pointer;
            display: inline-block;
        }

        span.more-detail {
            word-wrap: break-word;
            max-width: 312px;
        }

        .hero-icon-detail {
            width: 60px;
            height: 60px;
            background-size: cover;
            background-position: center center;
            content: " ";
            cursor: pointer;
            display: inline-block;
            margin-left: 5px;
            border-radius: 14px;
        }

        .product-detail-button {
            color: #fff;
            background-color: #8a6232;
            border-color: #805828;
            position: absolute;
            bottom: 29px;
        }

        .product-detail-button:hover {
            color: #fff;
            background-color: #0a6473;
            border-color: #17a2b8;
        }

        .ribbon-wrapper .ribbon {
            text-transform: unset;
        }

        .city__icon {
            width: 12vh;
        }

        .guide__title {
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            margin-bottom: 45px;
            font-weight: bold;
            color: #fff;
            text-shadow: 0 0 10px #5853ad, 0 0 20px #69e0ff, 0 0 40px #69e0ff;
        }

        .guide__title:not(:empty)::before,
        .guide__title:not(:empty)::after {
            content: "";
            width: 322px;
            height: 15px;
            background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAUIAAAAPCAYAAACRHMaaAAADd0lEQVR4Xu2aSYsUQRCFv3BBxQ0XXHBDxYM7KoiiCF79vZ49qTCooA7idnCZEdxwPKiMa0gMWVCmmVnVZc9IV0WfujtjfZn5KiKzBP84Ao6AIzBwBGTg+Xv6joAj0HMEVHUdMC8iP3KpOhH2fBF4eo7AkBEIJHgWeCoiM06EQ14NnrsjMEAEVHU1cAk4CbwBronIbAoKrwgHuEA8ZUegLwio6iHgE/BaRLTKS1XXAxeAY8AKwMbeATeBx3VZ03Ei7MuK8DwcgQEhoKpbQ6V3EHgBXBeRzwaBqu4EzgE2tjJUg3ZOaOQ4B9wHbovIfAXZAhGqqhNi8yJaDIy62myrV8nZ07CNTpNMabyrbkovF3dJNp7Bf5Gt6+byKtmPx+x3PAdNPkrjbcfiYicVVw63pvj+4JCakSYfbeeltJ42AXuBHYC1v6+AqyIyp6pHgDOAkeFy4BEwBawFLgK7ASNMI8+pqlWeVCJs2nRNtNZFf1SdLqTRZdPVcy0twra2224ykxvFXyxf6ab85eymbOT0S3Zj36XYcnnWbdR9LavhEscQ2zLZOlnVx+PvlVxKJhVL6r84tlJuufxyvlKY5nKr5xLLpH7HhL4qEOBH4KFdhABfgePAUWAj8BO4Gyo/k7OCbxtwKsiZDWuVTf/eqJu7iWBajy9iFbpUOTX5aRpPYdWkkxqv/itVfSlSyM1Vidy6km6T/xQpjlLNlGLObfa4osnFWCLUeEPXbY5CxCUyaCKKFHa5/2IsSkRYwic1N21wSlWRqRhKc2/yttaN3F6GVndXIDir9ozgrP29ZSRXb38DGdr44VAdbgnV4fumjdea2Poi2Jag7bC1reyEYfM/18RS+B63j3HZ62qnq16XB3FpKY8zjthP6mH/DbAK1y5LTgB7QiX+BLgDzIrIr9iQqh4ATgP7QlVpt8jTixn8hO1/D9cRcAQmCQFVtdvgDYHQrLozYpwRkQ+h+rOLku2hBbYq8jxgZ4ibgS/WNgMPTN6JcJJm3mN1BByBLALWoVWvxaiqXZQY8VkbbC9SrwH2h0uT5+EC5ZmIfI/7cIfYEXAEHIFeIKCqVg1eCZcn1kYbMVrhN23nhyLytp6oV4S9mHZPwhFwBOoIhPN7a4Evh/cJ7bzQLlCMBBfeN3Qi9DXjCDgCg0BAVe3s0CpDe9fwhojYazZ/fX4DLTCgp3UukRwAAAAASUVORK5CYII=) center/cover no-repeat;
        }

        .guide__title::before {
            margin-right: 36px;
        }

        .guide__title::after {
            margin-left: 36px;
            transform: rotate(180deg);
        }

        .banner-top {
            background: rgb(27 25 60 / 58%);
            color: #fff;
        }

        .city__detail {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            height: 90px;
            margin-top: 9vh;
        }

        .city__detail::before {
            z-index: 2;
            display: block;
            content: '';
            width: 54px;
            height: 54px;
            transform-origin: center;
            background: url(data:image/png;base64,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) center no-repeat;
            background-size: 100% auto;
        }

        .city__detail::after {
            content: '';
            position: absolute;
            top: 28px;
            left: 50%;
            width: 98px;
            height: 98px;
            background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGIAAABiCAYAAACrpQYOAAADGElEQVR4nO3cSXbCQAwE0IofN+D+R+QMZEE6CcZDDxpKbdUmj2SBVH8B2B2+ns8nguf+8/PhOsVgbt4DDOaOPwggMMbiPcBA1gjrx6ESFWKv9LAYESHOyg6JEQ2ituRwGJEgWssNhREForfUMBgRIEbLDIHBDiFVIj0GM4R0edQYrBBapdFiMEJol0WJwQZhVRIdBhOEdTlUGCwQXqXQYDBAeJfh/fwA/CEoSgDBHJ4Q7suv4jqPFwQbQonbXB4QrAglLvNZQ7AjlJjPaQkRBaHEdF4riGgIJWZzW0BERSgxmV8bIjpCifoemhCzIJSo7qMFMRtCidpeGhCzIpSo7CcNMTtCifiekhBXQSgR3VcK4moIJWJ7S0BcFaFEZP9RiKsjlAz3MAKRCO8Z6qMXIhG2091LD0QiHKern1aIRKhLc08tEInQlqa+aiESoS/VvdVAJMJYqvo7g0gEmZz2eASRCLI57HMPIhF0stvrFkQi6Gaz3zVEItjko+fl6I8Z1bz1vWz9MmOW395vSATv3AH//4/I/GTB68umwn7h1AR5AHgs/x84DnPV/Pa+bP0yY5K3vtevEYlhk4+et16sE0M3m/3uvWtKDJ3s9nr09jUxZHPY59nniMSQyWmPNR/oEmMsVf3VfrJOjL5U99ZyiSMx2tLUV+u1psSoS3NPPRf9EuM4Xf30Xn1NjO109zJyGTwx3jPUx+j9iMR4ZbgHiRtDV8cQ2V/qDt1VMcT2lrxVejUM0X2l71lfBUN8T43DA7NjqOyndYpjVgy1vTSP08yGobqP9rmmWTDU97A4YBYdw2R+q5N+UTHM5rY8chkNw3Re67OvUTDM5/Q4hMyO4TKf12lwVgy3uTyP5bNhuM7j/f8RLBjuc3hDAP4leD8/AA4IwK8MCgSABwKwL4UGAeCCAOzKoUIA+CAA/ZLoEABOCECvLEoEgBcCkC+NFgHghgDkyqNGAPghgPES6RGAGBBAf5khEIA4EEB7qWEQgFgQQH25oRCAeBDAecnhEICYEMB+2SERgLgQwGfpYRGA1xdnRc4aImy+AR6Dw6HJ07l+AAAAAElFTkSuQmCC) center no-repeat;
            background-size: cover;
            transform-origin: center;
            -webkit-animation: wave 1s linear infinite;
            animation: wave 1s linear infinite;
        }

        .swiper-btn-prev {
            left: 50%;
            width: 45px;
            height: 64px;
            background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC0AAABACAYAAACOcP4eAAAFZklEQVRogcXaeYhd1R0H8M/MJJNEGxVJcAloVQT/MgmYGsEtuBCq4larxiYuxVgVKVpaQcXdVnBpwSKt4i5Ssa6UgjWQ1gXikhoqaFFUUNP8E9xSNYkmzz9+5/Ju3sx7c8+d+9584TL3nHvO737nvN92fucOtVotU4gT8DY+zJk03B8ulXAQHsaM3IlTSfph7I6NuROnivRNWIRv6nCYCtLH4pp0v7WOgEGTnivUosBQHSGDJv0E9pqskEGSvhVHNSFoUKSX4cqmhA2C9CG4r0mB/Sa9O57BzCaF9pP0CB7HvKYF95P0A8InN45+kb4eyyuMm1aHQz9Ir8R1FcfOwJbcFzRN+kz8OWP89fgs+y2tVqup65hWq/Vdqzqeq/uuoYY2Acfjb5hecfyrOFLNhKkJ0ofhH/hBxfEbcCg+rvvCyer0ifiX6oS34iRtwvunKwuTIX0KnlZdJVo4FWtTe1TkJMvSfWXUJf1LQXhaxpyf4e+l9lLMSdfSnJfXIX0r/pA552I8VmovwhJsSteS1FcJOaSn4375KeZv8KdSex5OFkHlu3RtSX17VxFYlfR+wk2dX5VpwnW4rdSeLcL7LLGpHUrXN6lveRrTE1VIH44XsDCPr6twY8e7zsCeQiXK+8Oh1LdXGtOT10SkL8VLOCCPr1/hdx19yzAfn6d2SxjytHQvPVuAc3oJ72b9O+NurMgkux0X4KFS3zB+IgztixLhUe1kaYbw4UOJ+CHp2V+TzB0wXkRcgHvTxBxsxekinBeYJvR0fiLcStfM9OyeNG6lMMjN2nq+G9bhkfSsK+lf4A7slEn4XZHhrSv17SMC0AFi9YoVGxVG9xReTn2H4zRhkEU+MpyIvy+2bB91kt4Ddwq9y8UbItJ9UupbjB8LNftS2+hGRMh/Fv/skHO0cHv/x7bU18Iu+EoEpjUF6QtxlxrVS/wRl5Xa+4rV/aH4qYufm1i56WLVXu0ib3Ei/q32L1Oo00xREn52WFuH6mBbR7vQ2V4ye3msbnMKeS20CvXYE7ebwNV0wRqhjxtKfT8S6jHbWPWYLdRjdYecJWKVNxmrHpuEerzGWEO8JJGflUn8HZyF/5T65gldP1B4joJIYYjP4MXUd0QaWzbEEeyK90Rytr4QPJ7LWyRc3vxM4ptFNCu7vBHh8hYKD1J2edO195MXCT3udHlvCpe3gxp227nsIpKcszOJb8PPjQ0upwu39oUwsF7BZVis8Mt40jjBpZtRfCnc3xWZpEfwoAjjBbaLEu/rYvUkclsT8dESYWnM62nOGMJU2yMuEdWifTP/gavx21J7GOfhYO38oxO7Cbt4UBfChaCJsBrH4a0KY8u4BTeU2ttFbW+9UL/yahVeYn0a05Uw1fPp94SBPlJxfIFrRYpa4Cs8mv7O0jbMWR3PeiJn57JFZH23Z8whVvzyUnuDcHej2qnpqPDdG8bMHgd19oi/lm+gdwp9LrBWqN3sdK0WOUwl1N2N/14Eg28z5jyQ5hR4Xhx8bkz3lTHZCtMJ8msfR+CV1C4KNR/kvLSJsthiURabcEOasFGUxbKIltFEqXeNiHhVi4lzxDaq9jlMU/XpF4SqVP3ZFgq1qoUmi+qrVDuyKLBUlBiyc/mm6tNlrFT9NGC7OC//NOcF/ThzuceO4bsXNsusmNLf063HJhokSgM984zx0M9zxBXCQBtHP0lvE7WQ2scU3dDvs/HPREnh6yaFDuIrhH+LLVhjGNT3Hn8xtopaG4P8suYqY2sdtTDob5h+iv9NVsigSW/EuaV2rXA8Fd/lrcLN6T47GtKf3KMqXhOb5bkyP92cym9NV4hEaU7uxKkk/V9BPPsjle8BB9HRUL6DehMAAAAASUVORK5CYII=) center no-repeat;
            background-size: cover;
            transform: translateX(-100px);
            cursor: pointer;
        }

        .swiper-btn-next {
            right: 50%;
            width: 45px;
            height: 64px;
            background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC0AAABACAYAAACOcP4eAAAFXElEQVRogc3ae6ilUxjH8c8+M3OcKeM6CpNkRPhjzMhlcsld0sj9kjvlThpCkWuESIo/kMiMBrkNZYpRg8hl3Cb/KJFLYxIZHMyN2f541mu/+5w5Z6/3Pe/Br97OPms/71rfvd5nPc+z1t6tdrutonbAbni56o1Nqa/GPRthHnZpmCVbdaB/xBYC/D9RHeg+rMJeuK1ZnHyAOlqb/l6PwxpiyVZd6Fbp9Txs1QBLtupCl7UNnmmgn2w1AQ0H4q6G+uqppqDhGpzeYH8jqkloeERElXFV09ADWIgtG+63S01Dw7Z4ChPGoW+MDzQRux8bp75rZ8SJGXZn4uYa/WcBVNUaUTTl6CZcUGOMUVUHeqVqM/gQTq0xzshqt9t1r5fa+fqz3W4fOoaxuq5WjU1AoX68iX0y7ddhDl6tO2ChsUDDdnhP1B85+g1H4J2xDFrHp6enC77F0Tqlai9tjDfEjNdWVehJOC1d/antQxxXsY8XcGzFsf9RVegjMTVdR5baF6lWLE0U4FdUHB/VoPfCIRhM18G6i6MFuLji+Pfhzor3ZENvi2NEYvkzXWtS27SS3YOiRK2ia0XKn5R7Qw70FJGSJ4sNbStdq1Lbmcmm0N0iE1bROSIK7ZBj3Au6DyeJkDaoe2/YSm1bJ5tyX7fiuizcjmZhMfbrZdgL+nTMxM/p/7ZYRBPTa+m93UVEKesOXJXH+492xFu4dDSjkZJLH04Un/oXrE+Q/cKXiaJprZjxPmyKt/Fssi90Nh5VPVLNwyX4PQd6ovDT3RNwO10D6b2Hk90FYkGu1vHzTbEM89N7hebgOZ3YnqsP0jgfjwa9nUgUO4rHXsxYv1h0z4vHB/vjeLEgi4zYh83whdh2fVPqeyaexs4Vwf8QbvbghqD3wVEi1f6qs+gmpLYX8fqQDg8SYe83/JXa2thEPNZFeLdkPy19mD0rgsOTmIvvW+12e/s08HTxqIuwRszcpDTQeyN0Njvdv07nyRTuNICvRPYrz/r9uKwG+Bpcnrs4RrNrjdLe0r0oC/21gbYctdAqu8fewj2mGO4eU4R7LBnSycFilgcNd49B4R7vl+y3Eetidg3gp4V7rBi6EKeJhbiTiBwFSLEQF4rCHw5ItuWFOEFEkM+FSywv9T1DHC3sWhF2lSgNHigaNhTyJoiQN0tEkHLImyT2fHCh8ONyyNtMhKf5ul1gjjikHKgIvAznY2m5cbTkcoIIa1WSy1siHpf9+CyRXKoe3jyJi4SrDoPbkNaLmVkqZk+CW5vA+0vAks3SdE8Z+FI8XgP4SlEWDAOm96HLggQ4Q7hKSyfTlYE/SbZlzcW9FWG/xrmGL/gu9Qp568WqXS4iQtmXiiixPNmUZ/gG1YE/xeF6AJNXxPyOJ9LfyToLc/KQ9wpdJ0rTKpovdkGf5xjnJpcVItz165Sm/SJ2ryjZzcXtuaRJ94jFuqaXYaEq5eKH4tFNSdcSUYUVOkd1l7gSV1e8J+v0s6xXRMlavC50nGpHu+twsnh6lVXnhKk4qPky/d1XxOeRapChWic+ZO3v1sd6LDZdVH9TM+0HxbHYu70MR9NYvgkYEMkkF3ityLJjAmZs0M9hjwr2c8Rue8yqC32jKGNzdYaGgKnn05uLn0/kfuALdTbDjajuj1RWZ9reomFg6kGv1308MJIW+B99u5WjxSI1j4vGA/pbnKL+5rWnmoZeJU74Vzbcb5eahj4PHzXc5zA1CX2H2G2Pu5qCXqL6eXRtNQH9nSgz/zXVhS6n0bNFhvzXVBe6OGe+Da81xJKtOrXHVPwgzjn2bpwoQ3Vmeip+Mo4Zr5fq/kjlLHzWMEu2/gbv3csfYGcJUgAAAABJRU5ErkJggg==) center no-repeat;
            background-size: cover;
            transform: translateX(100px);
            cursor: pointer;
        }

        .title-shine {
            text-align: center;
            font-weight: bold;
            color: #fff;
            text-shadow: 0 0 10px #5853ad, 0 0 20px #69e0ff, 0 0 40px #69e0ff;
        }
    </style>
    <style>
        [class*=sidebar-dark-] .nav-sidebar>.nav-item>.nav-treeview {
            background-color: #2a2f33;
        }

        .concave {
            box-shadow: inset 4px 4px 8px #e1e0e0, inset -5px -5px 8px #fdfcfc;
            border: 1px solid #f3f5f7;
        }
    </style>
</head>