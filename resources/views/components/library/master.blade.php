<!DOCTYPE html>
<html lang="en">
<head>
    @include('components.library.header')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Chewy&display=swap');
    
        html,body {
          /* font-family: 'Noto Sans JP', sans-serif; */
          font-family: 'Comic Sans MS', cursive, sans-serif;
          /* background-image: url('{{ asset('images/school.webp') }}');
          background-repeat: repeat;
          background-size: auto; */
          font-family: "Chewy", system-ui;
          font-weight: 400;
          font-style: normal;
        }
    
        /* HEROOOOOO */
        .hero {
          /* background-image: url('{{ asset("images/building.png") }}');  */
          background-size: cover; 
          background-position: center;
          height: 100vh;
          position: relative;
        }
    
        .hero-text {
          position: absolute;
          top: 40%;
          left: 50%;
          transform: translate(-50%, -50%);
          /* color: #81ff2d; */
          text-align: center;
        }
    
        .chewy-font {
          font-family: 'Chewy', cursive;
        }
    
        .dynapuff-regular {
          font-family: "DynaPuff", system-ui;
          font-optical-sizing: auto;
          font-weight: 400;
          font-style: normal;
          font-variation-settings:
          "wdth" 100;
        }
    
        .hero-section {
          background: linear-gradient(145deg, #fffceb, #e8f7ff);
          background-image: url('{{ asset('images/school.webp') }}');
          position: relative;
          min-height: 100vh;
    
          display: flex;
          align-items: center;
          justify-content: center;
          overflow: hidden;
        }
    
        .hero-content {
          height: 100vh;
        }
    
        .hero-title {
          font-size:  clamp(4rem, 1rem, 12rem);
          color: #ff9000;
          letter-spacing: 1px;
          text-shadow: 2px 2px #ffcc00;
        }
    
        .title-fun-fact {
          font-size: clamp(1rem, 1vw + 1rem, 3rem);
        }
    
        .description-fun-fact {
          font-size: clamp(2rem, 2vw + 2rem, 4rem);
        }
    
        .container-title {
          font-size:  clamp(3rem, 3vw + 1rem, 6rem);
          color: #ff9000;
          text-shadow: 2px 2px #ffcc00;
          letter-spacing: 4px;
        }
    
        .hero-mascot {
          position: absolute;
          bottom: 4%;
          right: 5%;
          height: 250px;
          max-width: 100%;
          z-index: 3;
        }
    
        .mascot-mobile {
          position: absolute;
          height: 200px;
          max-width: 100%;
          bottom: 0%;
        }
    
        .hero-mascot-top-left {
          position: absolute;
          top:  clamp(2%, 5vw + 1%, 4%);
          height: clamp(30px, 5vw + 50px, 250px);
          max-width: 100%;
          animation: float 4s ease-in-out infinite;
        }
        
        .btn-explore {
          font-size: 1.1rem;
          background-color: #ff9000;
          color: white;
          padding: 8px 20px;
          text-decoration: none;
          border-radius: 70% 50% 60% 30% / 80% 60% 60% 35%;
          /* border-radius: 5px; */
          font-weight: bold;
          box-shadow: 0 4px 12px rgba(0,0,0,0.2);
          transition: transform 0.15s ease-in-out, background-color 0.15s ease-in-out, border-radius 0.15s ease-in-out;
          display: inline-block;
        }
    
        .btn-explore:hover {
          transform: scale(1.2) rotate(-3deg);
          color: #ffffff;
          background-color: #e47600;
          border-radius: 70% 50% 60% 30% / 80% 60% 60% 35%;
          animation: bounce 0.3s ease-in-out;
        }
    
        .mascot-book {
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          max-height: 350px;
          width: auto;
          z-index: 1;
          pointer-events: none;
        }
    
        .btn-fun-fact {
          font-size: 1.1rem;
          background-color: #1D3557;
          color: white;
          padding: 8px 20px;
          text-decoration: none;
          border-radius: 5px;
          font-weight: bold;
          box-shadow: 0 4px 12px rgba(0,0,0,0.2);
          transition: transform 0.15s ease-in-out, background-color 0.15s ease-in-out, border-radius 0.15s ease-in-out;
          display: inline-block;
        }
    
        .btn-fun-fact:hover {
          transform: scale(1.2) rotate(-3deg);
          color: #1D3557;
          background-color: #A8DADC;
          border-radius: 20px;
          animation: bounce 0.3s ease-in-out;
        }
        
        .btn-search-book {
          font-size: 1.1rem;
          background-color: #5accf8;
          color: white;
          padding: 12px 20px;
          text-decoration: none;
          border-radius: 40% 60% 60% 70% / 60% 80% 50% 70%;
          font-weight: bold;
          box-shadow: 0 4px 12px rgba(0,0,0,0.2);
          transition: transform 0.15s ease-in-out, background-color 0.15s ease-in-out, border-radius 0.15s ease-in-out;
          display: inline-block;
        }
    
        .btn-search-book:hover {
          transform: scale(1.2) rotate(-3deg);
          color: #4b5cb7;
          background-color: #A8DADC;
          border-radius: 40% 60% 60% 70% / 60% 60% 50% 70%;
          animation: bounce 0.3s ease-in-out;
        }
        
        .btn-visit {
          margin-top: 5vh;
          padding: 0px;
          width: 140px;
          height: 140px;
          background-color: #fff3c0;
          color: #000;
          border-radius: 50% 60% 20% 70% / 20% 60% 50% 70%;
          border: 3px solid #ffde9e;
          overflow: hidden;
          display: flex;
          align-items: center;
          justify-content: center;
          transition: transform 0.3s;
          box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
        }
    
        .btn-menu {
          margin-top: 0px;
          padding: 0px;
          width: 72px;
          height: 32px;
          background-color: #FFCC00;
          color: #1D3557;
          clip-path: polygon(
            10% 0%, 20% 10%, 35% 5%, 50% 15%, 65% 5%, 80% 10%, 90% 0%, 
            100% 20%, 95% 35%, 100% 50%, 95% 65%, 100% 80%, 90% 100%, 
            75% 90%, 60% 95%, 50% 85%, 40% 95%, 25% 90%, 10% 100%, 
            0% 80%, 5% 65%, 0% 50%, 5% 35%, 0% 20%
          );
          border: 3px solid #ffde9e;
          overflow: hidden;
          display: flex;
          align-items: center;
          justify-content: center;
          transition: transform 0.3s;
          box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
        }
    
        .btn-visit:hover {
          transform: scale(1.35) rotate(-3deg);
          color: #000000;
          background-color:#ffde9e;
          border: 3px solid #fff3c0;
          animation: bounce 1s ease-in-out;
        }
        
        .card-step-1 {
          padding: 15px;
          width: 400px;
          height: 150px;
          background-color: #fff3c0;
          color: #000;
          border-radius: 50% 60% 20% 70% / 20% 60% 50% 70%;
          border: 3px solid #ffde9e;
          overflow: hidden;
          display: flex;
          align-items: center;
          justify-content: center;
          transition: transform 0.3s;
          box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
        }
    
        .card-step-2 {
          padding: 15px;
          width: 400px;
          height: 150px;
          background-color: #fff3c0;
          color: #000;
          border-radius: 20% 35% 50% 70% / 20% 60% 50% 70%;
          border: 3px solid #ffde9e;
          overflow: hidden;
          display: flex;
          align-items: center;
          justify-content: center;
          transition: transform 0.3s;
          box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
        }
        
        .card-step-3 {
          padding: 15px;
          width: 400px;
          height: 150px;
          background-color: #fff3c0;
          color: #000;
          border-radius: 50% 35% 50% 30% / 50% 60% 50% 70%;
          border: 3px solid #ffde9e;
          overflow: hidden;
          display: flex;
          align-items: center;
          justify-content: center;
          transition: transform 0.3s;
          box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
        }
        
        .card-step-4 {
          padding: 15px;
          width: 400px;
          height: 150px;
          background-color: #fff3c0;
          color: #000;
          border-radius: 20% 35% 50% 70% / 20% 60% 50% 70%;
          border: 3px solid #ffde9e;
          overflow: hidden;
          display: flex;
          align-items: center;
          justify-content: center;
          transition: transform 0.3s;
          box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
        }
    
        .card-step-1:hover, .card-step-2:hover, .card-step-3:hover, .card-step-4:hover {
          transform: scale(1.35) rotate(-3deg);
          color: #000000;
          background-color:#ffde9e;
          border: 3px solid #fff3c0;
          animation: bouncebig 1s ease-in-out;
          cursor: pointer;
        }
    
        /* Bounce keyframe */
        @keyframes bounce {
          0%   { transform: scale(1) rotate(0deg); }
          30%  { transform: scale(1.25) rotate(-3deg); }
          60%  { transform: scale(1.15) rotate(-2deg); }
          100% { transform: scale(1.2) rotate(-3deg); }
        }
    
        @keyframes bouncebig {
          0%   { transform: scale(1.3) rotate(0deg); }
          30%  { transform: scale(1.25) rotate(-3deg); }
          60%  { transform: scale(1.15) rotate(-2deg); }
          100% { transform: scale(1.25) rotate(-3deg); }
        }
    
        .hero-mascot-bottom-left {
          position: absolute;
          bottom:  33%;
          left: 5%;
          height: 250px;
          max-width: 100%;
          animation: float 2s ease-in-out infinite;
          z-index: 4;
        }
    
        .fun-fact-card {
          animation: funfactcard 3.5s ease-in-out infinite;
        }
    
        @keyframes funfactcard {
          0%, 100% { transform: translateY(0px); }
          50% { transform: translateY(-4px); }
        }
    
        @keyframes float {
          0%, 100% { transform: translateY(0px); }
          50% { transform: translateY(-15px); }
        }
    
        /* END HEROOOOOOO */
        .highlight {
          background: #fff;
          border-radius: 20px;
          padding: 10px 20px;
          box-shadow: 0 5px 10px rgba(0,0,0,0.1);
          display: inline-block;
          font-size: 0.9rem;
        }
        .mascot {
          position: absolute;
          bottom: 20px;
          right: 20px;
          width: 190px;
        }
    
        .nav-link {
          color: #4a2e1f !important;
        }
    
        .card-body ul li {
          font-size: 1.05rem;
        }
        
        .chewy-regular {
          font-family: "Chewy", system-ui;
          font-weight: 400;
          font-style: normal;
        }
    
        .baloo {
          font-family: 'Baloo 2', cursive;
        }
    
        .visit-btn {
          position: relative;
          display: inline-block;
          overflow: hidden;
          border-radius: 4px;
          transition: transform 0.3s ease;
        }
    
        .visit-label {
          position: relative;
          z-index: 2;
          font-weight: bold;
          color: #000;
          transition: transform 0.3s ease;
        }
    
        .visit-btn::before {
          content: "";
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          background-color: #ff9000;
          transform: rotate(-2deg) scale(0.95);
          transform-origin: center;
          z-index: 1;
          opacity: 0;
          transition: all 0.3s ease-in-out;
          border-radius: 4px;
        }
    
        /* Hover effect */
        .visit-btn:hover::before {
          opacity: 1;
          transform: rotate(-2deg) scale(1.05);
        }
    
        /* Optional: text zoom effect on hover */
        .visit-btn:hover .visit-label {
          transform: scale(1.1);
        }
    
        .custom-dropdown {
          position: relative;
        }
    
        /* Fullscreen mobile nav */
        .mobile-nav-overlay {
          position: fixed;
          top: 0;
          left: 0;
          height: 100vh;
          width: 100%;
          background-color: #fff3c0;
          z-index: 9999;
          display: none;
          flex-direction: column;
          justify-content: flex-start;
          background-image: url(asset('images/school.webp')); /* kalau ingin motif */
          background-size: cover;
        }
    
        /* Show overlay */
        .mobile-nav-overlay.show {
          display: flex;
        }
    
        /* Menu item styling */
        .mobile-nav-overlay .nav-link {
          font-size: 1.2rem;
          font-weight: bold;
          color: #000;
          display: flex;
          justify-content: space-between;
          align-items: center;
        }
    
    
        /* Background */
        .section {
          position: relative;
          padding: 80px 20px;
          text-align: center;
          background-color: #FFDE9E;
          overflow: hidden;
        }
    
        .content-welcome {
          position: relative;
          z-index: 2; /* Pastikan lebih tinggi dari shape */
          display: flex;
          flex-wrap: wrap;
          justify-content: center;
        }
    
        .borrow-content {
          position: relative;
          z-index: 2; /* Pastikan lebih tinggi dari shape */
        }
    
        .custom-shape-divider-bottom-1744616671 {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
            transform: rotate(180deg);
        }
    
        .custom-shape-divider-bottom-1744616671 svg {
            position: relative;
            display: block;
            width: calc(100% + 1.3px);
            height: 85px;
        }
    
        .custom-shape-divider-bottom-1744616671 .shape-fill {
            fill: #FFDE9E;
        }
    
        .input-custom {
          padding: 10px 45px;
          width: 100%;
          height: 50px;
          background-color: #fff3c0;
          color: #000;
          border-radius: 40% 60% 50% 70% / 40% 60% 50% 70%;
          border: 3px solid #ffde9e;
          overflow: hidden;
          display: flex;
          align-items: center;
          justify-content: center;
          transition: transform 0.3s;
          box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
        }
    
        .wave svg {
          position: relative;
          display: block;
          width: calc(150% + 1.3px);
          height: 80px;
        }
    
        .wave.wave-top svg {
          transform: rotate(180deg);
        }
    
        .yellow-bg {
          background-color: #fff3c0;
        }
    
        .orange-bg {
          background-color: #ffde9e;
        }
    
        .peach-bg {
          background-color: #ffe8d6;
        }
    
        .brain-growth {
          background-color: #f5f5ff;
          background-image: url('school.webp');
          background-size: 300px;
          background-repeat: repeat;
          padding: 60px 20px;
        }
    
        .row-benefits {
          display: flex;
          flex-wrap: wrap;
          justify-content: center;
          gap: 20px;
          /* margin-top: 30px; */
        }
    
        .benefit-card {
          background-color: #fff3c0;
          border: 2px dashed #aaa;
          border-radius: 12px;
          padding: 20px;
          width: 280px;
          box-shadow: 0 4px 6px rgba(0,0,0,0.1);
          transition: transform 0.3s;
          text-align: center;
        }
    
        .benefit-card:hover {
          transform: scale(1.05);
          border-color: #aaa;
          cursor: pointer;
        }
    
        .benefit-icon {
          width: 100%;
          margin-bottom: 15px;
        }
    
        .custom-shape-divider-bottom-1744617338 {
          position: absolute;
          bottom: 0;
          left: 0;
          width: 100%;
          overflow: hidden;
          line-height: 0;
          z-index: 1; /* Lebih rendah agar di belakang content */
        }
    
        .custom-shape-divider-bottom-1744617338 svg {
          position: relative;
          display: block;
          width: calc(100% + 1.3px);
          height: 350px;
        }
    
        .custom-shape-divider-bottom-1744617338 .shape-fill {
          fill: #FFDE9E;
        }
    
        .custom-shape-divider-bottom-1744618158 {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
            transform: rotate(180deg);
            z-index: 1;
        }
    
        .custom-shape-divider-bottom-1744618158 svg {
            position: relative;
            display: block;
            width: calc(100% + 1.3px);
            height: 300px;
        }
    
        .custom-shape-divider-bottom-1744618158 .shape-fill {
            fill: #FFDE9E;
        }
    
        .custom-shape-divider-bottom-1744618671 {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
            transform: rotate(180deg);
        }
    
        .custom-shape-divider-bottom-1744618671 svg {
            position: relative;
            display: block;
            width: calc(100% + 1.3px);
            height: 87px;
        }
    
        .custom-shape-divider-bottom-1744618671 .shape-fill {
            fill: #fff3c0;
        }
    
        .custom-shape-divider-top-1744620027 {
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          overflow: hidden;
          line-height: 0;
        }
    
        .custom-shape-divider-top-1744620027 svg {
            position: relative;
            display: block;
            width: calc(100% + 1.3px);
            height: 87px;
        }
    
        .custom-shape-divider-top-1744620027 .shape-fill {
            fill: #FFDE9E;
        }
    
        .custom-shape-divider-bottom-1744696324 {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
            transform: rotate(180deg);
            z-index: 1;
        }
    
        .custom-shape-divider-bottom-1744696324 svg {
            position: relative;
            display: block;
            width: calc(100% + 1.3px);
            height: 86px;
        }
    
        .custom-shape-divider-bottom-1744696324 .shape-fill {
            fill: #FFDE9E;
        }
    
        .custom-shape-divider-top-1745815258 {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
            transform: rotate(180deg);
        }
    
        .custom-shape-divider-top-1745815258 svg {
            position: relative;
            display: block;
            width: calc(155% + 1.3px);
            height: 280px;
        }
    
        .custom-shape-divider-top-1745815258 .shape-fill {
            fill: #FFDE9E;
        }
    
        .quote { 
            font-family: "Caveat", cursive;
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: normal;
            position: absolute;
            padding: 25px;
            width: 400px;
            height: 150px;
            background-color: #ff9000;
            color: #fff;
            border-radius: 70% 50% 20% 80% / 40% 60% 60% 40%;
            border: 3px solid #fff3c0;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: transform 0.3s;
            box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
            bottom: 26%;
            right: 8%;
            z-index: 1;
            font-size: 1.8rem;
          }
    
        /** For tablet devices **/
        @media (min-width: 768px) and (max-width: 1024px) {
          .custom-shape-divider-top-1744620027 svg {
            width: calc(100% + 1.3px);
            height: 166px;
          }
    
          .hero-mascot {
            position: absolute;
            bottom: 0%;
            right: 5%;
            height: 220px;
            max-width: 100%;
            z-index: 999;
          }
    
          .hero-mascot-bottom-left {
            position: absolute;
            bottom:  20%;
            left: 2%;
            height: 200px;
            max-width: 100%;
            z-index: 4;
          }
    
          
          .quote { 
            font-family: "Caveat", cursive;
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: normal;
            position: absolute;
            padding: 25px;
            width: 250px;
            height: 150px;
            background-color: #ff9000;
            color: #fff;
            border-radius: 70% 50% 20% 80% / 40% 60% 60% 40%;
            border: 3px solid #fff3c0;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: transform 0.3s;
            box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
            bottom: 26%;
            right: 8%;
            z-index: 1;
            font-size: 1.4rem;
          }
    
          .mascot-book {
            position: absolute;
            top: 0%;
            left: 50%;
            transform: translate(-50%, -50%);
            max-height: 230px;
            width: auto;
            z-index: 1;
            pointer-events: none;
          }
        }
    
          .fun-card {
            background: #fff9e6;
            transition: transform 2s ease, box-shadow 2s ease;
            border: 2px dashed #ffc107;
          }
    
          .fun-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
          }
    
          .wave-title span {
            font-family: "Chewy", system-ui;
            font-weight: 400;
            font-style: normal;
            display: inline-block;
            animation: wave 2s infinite ease-in-out;
            font-size:  clamp(3.5rem, 1vw + 1rem, 6rem);
            color: #ff9000;
            text-shadow: 2px 2px #ffcc00;
            letter-spacing: 3px;
          }
    
          .wave-title span:nth-child(odd) {
            animation-delay: 0.3s;
          }
          .wave-title span:nth-child(even) {
            animation-delay: 0.5s;
          }
    
          .card-wave-title span {
            font-family: "Chewy", system-ui;
            font-weight: 400;
            font-style: normal;
            display: inline-block;
            animation: shakeX 4s infinite ease-in-out;
            font-size:  3rem;
            color: #ff9000;
            text-shadow: 2px 2px #ffcc00;
            letter-spacing: 4px;
          }
    
          .card-wave-title span:nth-child(odd) {
            animation-delay: 1s;
          }
          .card-wave-title span:nth-child(even) {
            animation-delay: 2s;
          }
    
          @keyframes shakeX {
            0% { transform: translateX(0) rotate(0deg); }
            25% { transform: translateX(-2px) rotate(-2deg); }
            50% { transform: translateX(2px) rotate(2deg); }
            75% { transform: translateX(-1px) rotate(-1deg); }
            100% { transform: translateX(0) rotate(0deg); }
          }
    
          @keyframes wave {
            0%, 100% { transform: translateY(0deg) rotate(0deg); }
            50% { transform: translateY(-5px) rotate(-2deg); }
          }
    
          .fun-card-custom {
            background-color: #A8DADC; /* Bisa ganti dengan warna random */
            border-radius: 20px;
            padding: 2rem 1rem;
            height: 100%;
            box-shadow: 0 8px 16px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            z-index: 1;
            position: relative;
          }
    
          .fun-card-custom:hover {
            transform: translateY(-30px); /* Naik 10px */
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2); /* Tambahan bayangan untuk efek pop */
            z-index: 2;
            cursor: pointer;
          }
    
    
          .flower-shape {
            background-color: #1D3557;
            color: white;
            padding: 1rem 1.5rem;
            border-radius: 50%;
            clip-path: polygon(
              50% 0%, 65% 10%, 85% 15%, 100% 30%, 
              100% 50%, 85% 70%, 65% 85%, 50% 100%, 
              35% 85%, 15% 70%, 0% 50%, 0% 30%, 
              15% 15%, 35% 10%
            );
            margin-bottom: 1rem;
          }
    
          /* Rotasi acak seperti contoh */
          .rotate-0 {
            transform: rotate(-10deg);
          }
          .rotate-1 {
            transform: rotate(0deg);
          }
          .rotate-2 {
            transform: rotate(10deg);
          }
    
          .card-facility {
            padding: 0px;
            width: 260px;
            height: 260px;
            background-color: #fff3c0;
            border-radius: 30% 40% 30% 40% / 40% 30% 40% 30%;
            border: 3px solid #ffb703;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: transform 0.3s;
            box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
          }
    
          .img-inside-polygon {
            width: 100%;
            height: 100%;
          }
    
          .card-intro {
            padding: 0px;
            width: 380px;
            height: 380px;
            background-color: #fff3c0;
            border-radius: 30% 40% 30% 40% / 40% 30% 40% 30%;
            border: 3px solid #ffcc00;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: transform 0.3s;
            box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
          }
          
          .img-inside-intro {
            width: 100%;
            height: 100%;
          }
          
          .card-content {
            width: 100%;
            height: 180px;
            background-color: #fff3c0;
            border-radius: 80% 60% 50% 60% / 60% 50% 60% 80%;
            border: 3px solid #ffcc00;
            overflow: hidden;
            display: grid;
            align-items: center;
            justify-content: center;
            text-align: center;
            transition: transform 0.3s;
            box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
          }
    
          .card-content:hover {
            cursor: pointer;
            background-color: #ffde9e;
            border-radius: 80% 60% 50% 60% / 60% 50% 60% 80%;
            border: 3px solid #fff3c0;
            transition: transform 0.3s;
            transform: translateX(10px);
          } 

          .description {
            font-size: 2rem;
          }
          .how-to{
            font-size: 2rem; 
          }
          @media (max-width: 480px) {
          .description {
            font-size: 1.2rem;
          }
          .how-to{
            font-size: 1.6rem;
          }
    
          .hero-mascot {
            position: absolute;
            bottom: 7%;
            left: 0%;
            height: 250px;
            max-width: 100%;
            z-index: 3;
          }
          .card-facility {
            width: 100%;
            height: 300px;
          }
          .hero-content {
            height: fit-content;
          }
          .card-content {
            width: 100%;
            height: 80px;
          }
          .benefit-card {
            padding: 20px;
            width: 100%;
          }
        }
    
        .custom-modal-title {
          background-color: #fff3c0;
          color: #000;
          padding: 12px;
          border-radius: 40% 60% 80% 70% / 20% 40% 40% 20%;
          border: 3px solid #ffde9e;
          overflow: hidden;
          display: flex;
          align-items: center;
          justify-content: center;
        }
  
        .custom-modal {
          padding: 50px;
          background-color: #ffde9e;
          color: #000;
          border-radius: 76% 24% 64% 36% / 16% 70% 30% 84% ;
          border: 3px solid #ffcc00;
          overflow: hidden;
          display: flex;
          align-items: center;
          justify-content: center;
          transition: transform 0.3s;
          box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    @include('components.library.navbar')

    <section class="content">
      @yield('content')
    </section>

    <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content custom-modal">
          <div class="d-flex gap-4">
            <h5 class="modal-title custom-modal-title fw-bold">Login First</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p class="text-danger text-center fw-bold">Login with your student account. <br> If you're external people you can read the book in place</p>
            <form method="POST" action="{{ route('login.library') }}">
              @csrf
              <div class="form-group">
                <label for="name">Username</label>
                <input name="username" type="text" class="form-control input-custom" required>
              </div>
    
              <div class="form-group">
                <label for="name">Password</label>
                <input name="password" type="text" class="form-control input-custom" required >
              </div>
    
              <div class="form-group d-flex justify-content-center align-item-center text-center">
                <input role="button" type="submit" class="btn-custom-login btn btn-success w-fit fw-bold">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <link rel="stylesheet" href="{{ asset('template') }}/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('template') }}/plugins/sweetalert2/sweetalert2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    
    <script>
      AOS.init();

      function toggleMobileNav() {
          document.getElementById('mobileNavOverlay').classList.toggle('show');
      }

      function logout(){
          Swal.fire({
          title: 'Are you sure want to logout',
          imageUrl: '{{ asset("images/confuse.png") }}',
          imageWidth: 120,
          imageHeight: 120,
          showCancelButton: true,
          confirmButtonText: "Yes, Exit!",
          cancelButtonText: "Cancel",
          background: "#fff3c0", // light background
          color: "#333",
          confirmButtonColor: "#43aa8b",
          cancelButtonColor: "#f94144",
          customClass: {
          popup: 'rounded-4 shadow-lg px-4 py-3',
          title: 'fw-bold text-dark',
          confirmButton: 'btn btn-success px-4',
          cancelButton: 'btn btn-danger px-4',
          },
          showClass: {
          popup: 'animate__animated animate__fadeInDown'
          },
          hideClass: {
          popup: 'animate__animated animate__fadeOutUp'
          }
      }).then((result) => {
              if (result.isConfirmed) {
                  $.ajax({
                      headers: {
                          "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                              "content"
                          ),
                      },
                      accepts: {
                          mycustomtype: "application/x-some-custom-type",
                      },
                      url: `/logout`,
                      type: "GET",
                      cache: false,
                  })
                      .then((res) => {
                          if (res.success) {
                              Swal.fire({
                                  imageUrl: '{{ asset("images/greta-greti-baju-olga.png") }}',
                                  imageWidth: 120,
                                  imageHeight: 120,
                                  showCancelButton: false,
                                  background: "#fefae0", // light background
                                  customClass: {
                                  popup: 'rounded-4 shadow-lg px-4 py-3',
                                  title: 'fw-bold text-dark',
                                  confirmButton: 'btn btn-success px-4',
                                  cancelButton: 'btn btn-danger px-4',
                                  },
                                  showClass: {
                                  popup: 'animate__animated animate__fadeInDown'
                                  },
                                  hideClass: {
                                  popup: 'animate__animated animate__fadeOutUp'
                                  }
                              });
                              window.location.reload();
                          } else {
                              Swal.fire({
                                  icon: "error",
                                  title: "Oops...",
                                  text: "Something went wrong!",
                                  footer: '<a href="#">Why do I have this issue?</a>',
                              });
                          }
                      })
                      .catch((err) => {
                          Swal.fire({
                              icon: "error",
                              title: "Oops...",
                              text: "Something went wrong!",
                              footer: '<a href="#">Why do I have this issue?</a>',
                          });
                      });
              }
          });
      }
    </script>
</body>