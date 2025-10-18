import { Categories } from "@/components/categories";
import { FullWidthSection } from "@/components/fullwidthsection";
import { Hero } from "@/components/hero";
import { HowIDo } from "@/components/howido";
import { LatestPosts } from "@/components/latest-posts";
import { SocialIcons } from "@/components/social-icons";
import { Testimonial } from "@/components/testimonial";
import { Toolkit } from "@/components/toolkit";
import { getAllPosts, getCategories } from "@/lib/queries";
import Link from "next/link";

export const dynamic = "force-dynamic";

export default async function Home() {
  const categories = await getCategories();
  const { posts } = await getAllPosts();

  return (
    <>
      <Hero />

      {/* Testimonials - Limited width */}
      <Testimonial />

      {/* How I Do Websites - Full width */}
      <FullWidthSection bgColor="bg-white">
        <HowIDo />
      </FullWidthSection>

      {/* Toolkit - Full width */}
      <FullWidthSection bgColor="bg-gray-50">
        <Toolkit />
      </FullWidthSection>

      {/* Social Icons - Limited width */}
      <SocialIcons />

      {/* Categories - Limited width */}
      <Categories categories={categories} />

      {/* Latest Posts - Limited width */}
      <LatestPosts posts={posts} />

      {/* View More Blog Link */}
      <div className="text-center mt-12 mb-20">
        <Link
          href="/blog"
          className="inline-block text-gray-800 font-medium hover:underline"
        >
          View More Posts →
        </Link>
      </div>
    </>
  );
}
