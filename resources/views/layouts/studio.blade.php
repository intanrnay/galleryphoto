@extends('main')

<link rel="stylesheet" href="style.css">
@section('content')

<div class="nct">
    <div class="sub-card category">
      <span class="text_span">Neo Culture Tech</span>
      <svg
        class="icon_svg"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 512 512"
      >
        <path
          d="M86.6 64l85.2 85.2C194.5 121.7 208 86.4 208 48c0-14.7-2-28.9-5.7-42.4C158.6 15 119 35.5 86.6 64zM64 86.6C35.5 119 15 158.6 5.6 202.3C19.1 206 33.3 208 48 208c38.4 0 73.7-13.5 101.3-36.1L64 86.6zM256 0c-7.3 0-14.6 .3-21.8 .9C238 16 240 31.8 240 48c0 47.3-17.1 90.5-45.4 124L256 233.4 425.4 64C380.2 24.2 320.9 0 256 0zM48 240c-16.2 0-32-2-47.1-5.8C.3 241.4 0 248.7 0 256c0 64.9 24.2 124.2 64 169.4L233.4 256 172 194.6C138.5 222.9 95.3 240 48 240zm463.1 37.8c.6-7.2 .9-14.5 .9-21.8c0-64.9-24.2-124.2-64-169.4L278.6 256 340 317.4c33.4-28.3 76.7-45.4 124-45.4c16.2 0 32 2 47.1 5.8zm-4.7 31.9C492.9 306 478.7 304 464 304c-38.4 0-73.7 13.5-101.3 36.1L448 425.4c28.5-32.3 49.1-71.9 58.4-115.7zM340.1 362.7C317.5 390.3 304 425.6 304 464c0 14.7 2 28.9 5.7 42.4C353.4 497 393 476.5 425.4 448l-85.2-85.2zM317.4 340L256 278.6 86.6 448c45.1 39.8 104.4 64 169.4 64c7.3 0 14.6-.3 21.8-.9C274 496 272 480.2 272 464c0-47.3 17.1-90.5 45.4-124z"
        ></path>
      </svg>
    </div>
    <div class="nct_container">
      <svg class="image" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <path
          d="M20 5H4V19L13.2923 9.70649C13.6828 9.31595 14.3159 9.31591 14.7065 9.70641L20 15.0104V5ZM2 3.9934C2 3.44476 2.45531 3 2.9918 3H21.0082C21.556 3 22 3.44495 22 3.9934V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918C2.44405 21 2 20.5551 2 20.0066V3.9934ZM8 11C6.89543 11 6 10.1046 6 9C6 7.89543 6.89543 7 8 7C9.10457 7 10 7.89543 10 9C10 10.1046 9.10457 11 8 11Z"
        ></path>
      </svg>
    </div>
    <div class="sub-card named">
      <span class="text_span"></span>
    </div>
  </div>

<style>
.card {
    --white: hsl(0, 0%, 83%);
    --black: hsl(240, 15%, 9%);
    --stone-300: hsl(24, 6%, 83%);
    --pink-500: hsl(299, 100%, 83%);
  
    cursor: pointer;
  
    position: relative;
  
    display: flex;
    flex-direction: column;
    align-items: center;
}
  
.sub-card {
    display: flex;
    align-items: center;
  
    padding: 0.75rem;
    min-width: 11.5rem;
    height: 2.25rem;
    background-color: var(--stone-300);
}
  
.sub-card.category {
    justify-content: space-between;
  
    border-radius: 0.5rem 0.5rem 0rem 0rem;
  
    transition: all 0.5s cubic-bezier(1, 0, 0, 1);
}
  
.sub-card.named {
    justify-content: center;
  
    border-radius: 0rem 0rem 0.5rem 0.5rem;
  
    transition: all 0.5s cubic-bezier(1, 0, 0, 1);
}
  
.card:hover .sub-card.category {
    transform: translateY(100%);
}

.card:hover .sub-card.named {
    transform: translateY(-100%);
}
  
.sub-card .text_span {
    font-size: 0.75rem;
    font-weight: 600;
    color: var(--black);
    text-transform: capitalize;
}
  
.sub-card .icon_svg {
    width: 1rem;
    fill: var(--black);
}
  
.card_container {
    overflow: hidden;
  
    position: relative;
    z-index: 5;
  
    width: 17rem;
    height: 14rem;
    background-color: var(--pink-500);
  
    border-radius: 0.5rem;
}

.card_container::before {
    content: "";
  
    position: absolute;
    z-index: 10;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  
    width: 0rem;
    aspect-ratio: 1;
    background-color: hsl(240, 15%, 9%, 0.2);
  
    border-radius: 50%;
    transform-origin: center;
  
    transition: all 1s cubic-bezier(1, 0, 0, 1) 0.2s;
}

.card_container::after {
    content: "See more";
  
    position: absolute;
    z-index: 10;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  
    display: flex;
    justify-content: center;
    align-items: center;
  
    padding: 0rem;
    box-sizing: border-box;
    width: 0rem;
    aspect-ratio: 1;
    background-color: hsl(240, 15%, 9%, 0.5);
  
    font-size: 0rem;
    font-weight: bold;
    color: var(--white);
    text-align: center;
  
    border-radius: 50%;
    transform-origin: center;
  
    transition: all 1s cubic-bezier(1, 0, 0, 1) 0s;
}
  
.card:hover .card_container::before {
    width: 22.5rem;
  
    transition: all 1s cubic-bezier(1, 0, 0, 1) 0s;
}
  
.card:hover .card_container::after {
    padding: 1rem;
    width: 5rem;
  
    font-size: 0.75rem;
  
    transition: all 0.3s ease-in-out 0.4s;
}
  
.card_container .image {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  
    width: 3rem;
    fill: var(--black);
}

</style>
 
  
@endsection