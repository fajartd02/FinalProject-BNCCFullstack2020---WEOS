<!DOCTYPE html>
<html>

<head>
    <title>WEOS</title>
    <link rel="icon" href="{{ asset('asset/img/logo.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/course.css') }}">
</head>

<body>
<nav class="navbar">
        <a class="nav-brand" href="/index"><img id="logo" src="{{ asset('asset/img/logo.png') }}"></a>
        <input id="search" class="nav-item" type="search" placeholder="Search">
        <a href="/post" style = "margin-left : 50px; position:relative; bottom: 30px;">FORUM</a>
        <ul>
            <li>
                <a id="browse-btn" class="nav-item icon-btn" href="/course"><i class="fas fa-compass"></i></a>
            </li>
            <li>
                <a id="user-btn" class="nav-item icon-btn" href="/login"><i class="fas fa-user-circle"></i></a>
            </li>
        </ul>
    </nav>


    <div class="container">
        <div class="submodule">
            <div class="header">
                <p>COURSE</p>
            </div>
            <ul class="scrollable-list">
                <li class="module-btn" current="1">Introdution to C++</li>
                <li class="module-btn">Conditional and Loops</li>
                <li class="module-btn">Input and Output</li>
                <li class="module-btn">Functions</li>
                <li class="module-btn">Pointers and Reference</li>
                <li class="module-btn">File processing</li>
                <li class="module-btn">Classes and Objects</li>
                <li class="module-btn">Object Oriented Programming</li>
                <li class="module-btn">Polymorphism</li>
                <li class="module-btn">Inheritance</li>
            </ul>
        </div>

        <div class="content">
            <div class="video">
                <iframe src="https://www.youtube.com/embed/vLnPwxZdW4Y" title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>

            <div class="text">
                <h2>Before C++, there was C</h2>
                <p>
                    The C language was developed in 1972 by Dennis Ritchie at Bell Telephone laboratories, primarily as
                    a systems programming language (a language to write operating systems with). Ritchie’s primary goals
                    were to produce a minimalistic language that was easy to compile, allowed efficient access to
                    memory, produced efficient code, and was self-contained (not reliant on other programs). For a
                    high-level language, it was designed to give the programmer a lot of control, while still
                    encouraging platform (hardware and operating system) independence (that is, the code didn’t have to
                    be rewritten for each platform).
                </p>
                <p>
                    C ended up being so efficient and flexible that in 1973, Ritchie and Ken Thompson rewrote most of
                    the Unix operating system using C. Many previous operating systems had been written in assembly.
                    Unlike assembly, which produces programs that can only run on specific CPUs, C has excellent
                    portability, allowing Unix to be easily recompiled on many different types of computers and speeding
                    its adoption. C and Unix had their fortunes tied together, and C’s popularity was in part tied to
                    the success of Unix as an operating system.
                </p>
                <p>
                    In 1978, Brian Kernighan and Dennis Ritchie published a book called “The C Programming Language”.
                    This book, which was commonly known as K&R (after the authors’ last names), provided an informal
                    specification for the language and became a de facto standard. When maximum portability was needed,
                    programmers would stick to the recommendations in K&R, because most compilers at the time were
                    implemented to K&R standards.
                </p>
                <p>
                    In 1983, the American National Standards Institute (ANSI) formed a committee to establish a formal
                    standard for C. In 1989 (committees take forever to do anything), they finished, and released the
                    C89 standard, more commonly known as ANSI C. In 1990 the International Organization for
                    Standardization (ISO) adopted ANSI C (with a few minor modifications). This version of C became
                    known as C90. Compilers eventually became ANSI C/C90 compliant, and programs desiring maximum
                    portability were coded to this standard.
                </p>
                <p>
                    In 1999, the ANSI committee released a new version of C called C99. C99 adopted many features which
                    had already made their way into compilers as extensions, or had been implemented in C++.
                </p>

                <hr>

                <h2>C++</h2>
                <p>
                    C++ (pronounced see plus plus) was developed by Bjarne Stroustrup at Bell Labs as an extension to C,
                    starting in 1979. C++ adds many new features to the C language, and is perhaps best thought of as a
                    superset of C, though this is not strictly true (as C99 introduced a few features that do not exist
                    in C++). C++’s claim to fame results primarily from the fact that it is an object-oriented language.
                    As for what an object is and how it differs from traditional programming methods, well, we’ll cover
                    that in chapter 8 (Basic object-oriented programming).
                </p>
                <p>
                    C++ was standardized in 1998 by the ISO committee (this means the ISO committee ratified a document
                    describing the C++ language, to help ensure all compilers adhered to the same set of standards). A
                    minor update was released in 2003 (called C++03).
                </p>
                <p>
                    Three major updates to the C++ language (C++11, C++14, and C++17, ratified in 2011, 2014, and 2017
                    accordingly) have been made since then, each adding additional functionality. C++11 in particular
                    added a huge number of new capabilities, and at this point is widely considered the new baseline. As
                    of the time of writing, C++20 is in the works, promising to bring even more new capabilities. Future
                    upgrades to the language are expected every three or so years.
                </p>
                <p>
                    Each new formal release of the language is called a language standard (or language specification).
                    Standards are named after the year they are released in. For example, there is no C++15, because
                    there was no new standard in 2015.
                </p>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
        integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script src="{{ asset('asset/js/navbar.js') }}"></script>
    <script src="{{ asset('asset/js/course.js') }}"></script>
</body>

</html>