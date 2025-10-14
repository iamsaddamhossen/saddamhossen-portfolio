import { Footer } from "@/components/footer";
import { Header } from "@/components/header";
import { Hero } from "@/components/hero"; // ✅ Move hero here
import type { Metadata } from "next";
import { Inter } from "next/font/google";
import "./globals.css";

const inter = Inter({ subsets: ["latin"] });

export const metadata: Metadata = {
  title: "Saddam Hossen - WordPress Developer (09 Years Experience)",
  description:
    "Professional WordPress developer specializing in custom themes, plugins, and performance optimization.",
};

export default function RootLayout({
  children,
}: {
  children: React.ReactNode;
}) {
  return (
    <html lang="en">
      <body
        className={`${inter.className} antialiased bg-gray-50 text-gray-900`}
      >
        {/* Full-width header */}
        <Header />

        {/* Full-width hero section */}
        <Hero />

        {/* Main content area limited to 1200px */}
        <main className="max-w-[1200px] mx-auto px-4 md:px-8">{children}</main>

        {/* Full-width footer */}
        <Footer />
      </body>
    </html>
  );
}
