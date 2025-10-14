export function Footer() {
  return (
    <footer className="w-full bg-gray-900 text-gray-300 mt-16">
      <div className="max-w-[1200px] mx-auto px-4 md:px-8 py-10 text-center">
        <p className="text-sm">
          © {new Date().getFullYear()} Saddam Hossen. All Rights Reserved.
        </p>
        {/* <p className="text-xs mt-2 text-gray-500">
          Built with Next.js & Tailwind CSS — Powered by Headless WordPress
        </p> */}
      </div>
    </footer>
  );
}
