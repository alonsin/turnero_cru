<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>TURNERO C R U</title>
    <link crossorigin="" href="https://fonts.gstatic.com/" rel="preconnect" />
    <link as="style" href="https://fonts.googleapis.com/css2?display=swap&amp;family=Public+Sans:wght@400;500;700;900" onload="this.rel='stylesheet'" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#13a4ec",
                        "background-light": "#000000",
                        "background-dark": "#101c22",
                    },
                    fontFamily: {
                        "display": ["Public Sans"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <style type="text/tailwindcss">
        @layer utilities {
            .scrollbar-hide::-webkit-scrollbar {
                display: none;
            }
            .scrollbar-hide {
                -ms-overflow-style: none;
                scrollbar-width: none;
            }
            .bg-pattern {
                background-image: url('data:image/svg+xml,%3Csvg width="100" height="100" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="%23FFFFFF" fill-opacity="0.1"%3E%3Cpath d="M98 0H2V98H0V100h100V0h-2V98H2V0zM10 10V0H0v10h10zm20 0V0h-10v10h10zM40 0h10v10H40V0zm20 0h10v10H60V0zm20 0h10v10H80V0zm10 20h10v10H90V20zM90 40h10v10H90V40zm0 20h10v10H90V60zm0 20h10v10H90V80zM80 90h10v10H80V90zm-20 0h10v10H60V90zm-20 0h10v10H40V90zM20 90h10v10H20V90zM0 90h10v10H0V90zM0 80h10v10H0V80zM0 60h10v10H0V60zM0 40h10v10H0V40zM0 20h10v10H0V20z"/%3E%3C/g%3E%3C/svg%3E');
                background-size: 100px 100px;
            }.custom-scrollbar::-webkit-scrollbar {
                width: 8px;
            }
            .custom-scrollbar::-webkit-scrollbar-track {
                background: transparent;
                border-radius: 10px;
            }
            .custom-scrollbar::-webkit-scrollbar-thumb {
                background: rgba(0, 0, 0, 0.2);
                border-radius: 10px;
            }
            .dark .custom-scrollbar::-webkit-scrollbar-thumb {
                background: rgba(255, 255, 255, 0.2);
            }
            .custom-scrollbar {
                scrollbar-width: thin;
                scrollbar-color: rgba(0, 0, 0, 0.2) transparent;
            }
            .dark .custom-scrollbar {
                scrollbar-color: rgba(255, 255, 255, 0.2) transparent;
            }
            @keyframes pulse-ring {
                0% {
                    transform: scale(0.33);
                    opacity: 1;
                }
                100% {
                    transform: scale(1.5);
                    opacity: 0;
                }
            }
            .pulse-ring {
                animation: pulse-ring 2s cubic-bezier(0.215, 0.61, 0.355, 1) infinite;
            }
            @keyframes slide-in-top {
                0% {
                    transform: translateY(-20px);
                    opacity: 0;
                }
                100% {
                    transform: translateY(0);
                    opacity: 1;
                }
            }
            .slide-in-top {
                animation: slide-in-top 0.5s ease-out forwards;
            }
            @keyframes marquee {
                0% { transform: translateX(100%); }
                100% { transform: translateX(-100%); }
            }
            .marquee {
                animation: marquee 15s linear infinite;
                white-space: nowrap;
                overflow: hidden;
            }
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark font-display">
    <div class="flex flex-col min-h-screen">
        <livewire:show-data-turnero />
    </div>

</body>

</html>