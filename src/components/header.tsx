"use client";

import Image from "next/image";
import Link from "next/link";
import { useState } from "react";
import { HiOutlineMenu, HiOutlineX } from "react-icons/hi";

export function Header() {
  const [menuOpen, setMenuOpen] = useState(false);

  const links = [
    { href: "/about", label: "About Saddam" },
    { href: "/blog", label: "Blog" },
    { href: "/code-snippets", label: "Code Snippets" },
    { href: "/plugins", label: "Plugins" },
    { href: "/contact", label: "Contact" },
  ];

  return (
    <header className="w-full bg-white/95 backdrop-blur-md shadow-md sticky top-0 z-50">
      <div className="max-w-[1200px] mx-auto flex justify-between items-center py-4 px-4 md:px-8">
        {/* Logo */}
        <Link
          href="/"
          className="flex items-center space-x-2 transform transition-transform duration-200 hover:scale-105"
        >
          <Image
            src="/logo.svg"
            width={220}
            height={80}
            alt="Saddam Hossen"
            priority
          />
        </Link>

        {/* Desktop Navigation */}
        <nav className="hidden md:flex">
          <ul className="flex gap-6 text-gray-700 font-medium">
            {links.map((link) => (
              <li key={link.href}>
                <Link
                  href={link.href}
                  className="hover:text-black relative after:absolute after:left-0 after:-bottom-1 after:w-0 after:h-[2px] after:bg-[#0f4148] after:transition-all after:duration-300 hover:after:w-full"
                >
                  {link.label}
                </Link>
              </li>
            ))}
          </ul>
        </nav>

        {/* Mobile Hamburger */}
        <button
          className="md:hidden text-2xl text-gray-700"
          onClick={() => setMenuOpen(!menuOpen)}
          aria-label="Toggle menu"
        >
          {menuOpen ? <HiOutlineX /> : <HiOutlineMenu />}
        </button>
      </div>

      {/* Mobile Menu */}
      {menuOpen && (
        <div className="md:hidden bg-white/95 backdrop-blur-md shadow-md w-full absolute top-full left-0 z-40">
          <ul className="flex flex-col gap-4 p-4 text-gray-700 font-medium">
            {links.map((link) => (
              <li key={link.href}>
                <Link
                  href={link.href}
                  className="block py-2 px-3 rounded hover:bg-gray-100 transition-colors"
                  onClick={() => setMenuOpen(false)}
                >
                  {link.label}
                </Link>
              </li>
            ))}
          </ul>
        </div>
      )}
    </header>
  );
}
